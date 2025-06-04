<?php

namespace App\Services;

class KnapsackService
{
    function knapsackWithItems($items, $capacity)
    {
        $n = count($items);
        $dp = array_fill(0, $n + 1, array_fill(0, $capacity + 1, 0));

        for ($i = 1; $i <= $n; $i++) {
            for ($w = 0; $w <= $capacity; $w++) {
                if ($items[$i - 1]['weight'] <= $w) {
                    $dp[$i][$w] = max(
                        $dp[$i - 1][$w],
                        $items[$i - 1]['value'] + $dp[$i - 1][$w - $items[$i - 1]['weight']]
                    );
                } else {
                    $dp[$i][$w] = $dp[$i - 1][$w];
                }
            }
        }

        // Menelusuri kembali item yang dipilih
        $w = $capacity;
        $selectedItems = [];
        for ($i = $n; $i > 0; $i--) {
            if ($dp[$i][$w] != $dp[$i - 1][$w]) {
                $selectedItems[] = $items[$i - 1];
                $w -= $items[$i - 1]['weight'];
            }
        }

        return [
            'max_value' => $dp[$n][$capacity],
            'selectedItems' => $selectedItems
        ];
    }
}
