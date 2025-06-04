<?php

namespace App\Http\Controllers;

use App\Services\FibonacciService;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function index()
    {
        $title = 'Fibonacci';
        return view('fibonacci',compact('title'));
    }

    public function post(Request $request, FibonacciService $fibonacciService)
    {
        $title = 'Fibonacci';

        $suku = $request->suku;
        $result = [];

        for ($i = 0; $i <= $suku; $i++) {
            $result[] = $fibonacciService->fibonacciCount($i);
        }
        
        return view('fibonacci', compact('title', 'result'));
    }
}
