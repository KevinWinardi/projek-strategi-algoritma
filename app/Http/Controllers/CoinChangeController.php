<?php

namespace App\Http\Controllers;

use App\Services\CoinChangeService;
use Illuminate\Http\Request;

class CoinChangeController extends Controller
{
    public function index()
    {
        return view('coin-change');
    }

    public function post(Request $request, CoinChangeService $coinChangeService)
    {
        $title = 'Coin Change';

        // Validasi input
        $request->validate([
            'coins' => 'required|regex:/^\d+(,\d+)*$/',
            'target' => 'required|integer|min:1',
        ]);

        // Ambil dan proses input
        $coins = array_filter(array_map('intval', explode(',', $request->coins)));
        rsort($coins); // Urutkan dari besar ke kecil

        $target = $request->target;
        $remaining = $target;

        $data = $coinChangeService->processGreedyCoin($coins, $remaining);
        $remaining = $data['remaining'];
        $result = $data['result'];

        // Jika masih ada sisa, berarti greedy gagal
        if ($remaining > 0) {
            return back()->withInput()->with('error', 'Greedy gagal menemukan solusi yang tepat.');
        }

        // Tampilkan hasil
        return view('coin-change', compact('coins', 'target', 'result'));
    }
}
