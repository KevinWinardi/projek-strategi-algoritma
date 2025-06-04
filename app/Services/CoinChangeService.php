<?php

namespace App\Services;

class CoinChangeService
{
    public function processGreedyCoin($coins, $remaining)
    {
        $result = [];
        foreach ($coins as $coin) {
            if ($coin <= 0) continue;
            $count = intdiv($remaining, $coin);
            if ($count > 0) {
                $result[$coin] = $count;
                $remaining -= $coin * $count;
            }
        }

        return compact('remaining', 'result');
    }
}
