<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\KnapsackService;
use Illuminate\Http\Request;

class KnapsackController extends Controller
{
    public function index()
    {
        $title = 'Knapsack';
        return view('knapsack', compact('title'));
    }

    public function post(Request $request, KnapsackService $knapsackService)
    {
        $request->validate([
            'capacity' => 'required|integer|min:1',
        ]);

        $title = 'Knapsack';
        $capacity = $request->capacity;

        $items = Product::all()->toArray();
        $data = $knapsackService->knapsackWithItems($items, $capacity);

        $maxValue = $data['max_value'];
        $selectedItems = $data['selectedItems'];

        return view('knapsack', compact('title', 'capacity', 'maxValue', 'selectedItems'));
    }
}
