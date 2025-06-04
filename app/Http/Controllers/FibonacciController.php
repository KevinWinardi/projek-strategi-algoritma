<?php

namespace App\Http\Controllers;

use App\Services\FibonacciService;
use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function index()
    {
        return view('fibonacci');
    }

    public function post(Request $request, FibonacciService $fibonacciService)
    {
        $request->validate([
            'suku' => 'required|integer|min:1',
        ]);

        $suku = $request->suku;
        $result = [];

        for ($i = 0; $i <= $suku; $i++) {
            $result[] = $fibonacciService->fibonacciCount($i);
        }
        
        return view('fibonacci', compact('result'));
    }
}
