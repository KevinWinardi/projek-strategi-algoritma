<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function halamanBeranda()
    {
        return view('beranda');
    }

    public function fibonacci($n)
    {
        if ($n < 2) {
            return $n;
        } else {
            return $this->fibonacci($n - 1) + $this->fibonacci($n - 2);
        }
    }

    public function halamanHitungFibonacci(Request $request)
    {
        $suku = $request->query('suku');
        $result = [];
        for ($i = 0; $i <= $suku; $i++) {
            $result[] = $this->fibonacci($i);
        }
        return view('hitung-fibonacci', ['result' => $result]);
    }
}


