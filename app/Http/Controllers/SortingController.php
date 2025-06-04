<?php

namespace App\Http\Controllers;

use App\Services\SortingService;
use Illuminate\Http\Request;

class SortingController extends Controller
{
    public function index()
    {
        $title = 'Sorting';
        return view('sorting', compact('title'));
    }

    public function post(Request $request, SortingService $sortingService)
    {
        $title = 'Sorting';

        $array = explode(',', $request->input('array'));
        $array = array_map('intval', $array); // Konversi ke integer
        $result = $array;
        $method = $request->input('method');

        if ($method === 'Bubble') {
            $data = $sortingService->bubbleSort($array);
        } else {
            $data = $sortingService->selectionSort($array);
        }

        $sorted = $data['arr'];
        $executionTime = $data['executionTime'];

        return view('sorting', compact('title', 'result', 'sorted', 'executionTime', 'method'));
    }
}
