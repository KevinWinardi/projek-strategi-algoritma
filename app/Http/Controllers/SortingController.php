<?php

namespace App\Http\Controllers;

use App\Services\SortingService;
use Illuminate\Http\Request;

class SortingController extends Controller
{
    public function index()
    {
        return view('sorting');
    }

    public function post(Request $request, SortingService $sortingService)
    {
        $request->validate([
            'method' => 'required|string',
            'array' => 'required|string'
        ]);

        $array = explode(',', $request->array);
        $array = array_map('intval', $array); // Konversi ke integer
        $result = $array;
        $method = $request->method;

        if ($method === 'Bubble') {
            $data = $sortingService->bubbleSort($array);
        } else {
            $data = $sortingService->selectionSort($array);
        }

        $sorted = $data['arr'];
        $executionTime = $data['executionTime'];

        return view('sorting', compact('result', 'sorted', 'executionTime', 'method'));
    }
}
