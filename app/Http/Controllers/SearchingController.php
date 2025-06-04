<?php

namespace App\Http\Controllers;

use App\Services\SearchingService;
use App\Services\SortingService;
use Illuminate\Http\Request;

class SearchingController extends Controller
{
    public function index()
    {
        return view('searching');
    }

    public function post(Request $request, SortingService $sortingService, SearchingService $searchingService)
    {
        $request->validate([
            'numbers' => ['required', 'regex:/^\d+(,\d+)*$/'],
            'target' => 'required|integer',
        ]);

        // Parsing input string menjadi array integer
        $original = array_map('intval', explode(',', $request->numbers));
        $target = intval($request->target);
        
        // Sorting dan Binary Search
        $sorted = $sortingService->bubbleSort($original)['arr'];
        $index = $searchingService->binarySearch($sorted, $target);

        return view('searching', compact('original', 'sorted', 'target', 'index'));
    }
}
