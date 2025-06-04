<?php

namespace App\Services;

class SearchingService
{
    public function binarySearch($data, $target)
    {
        $low = 0;
        $high = count($data) - 1;

        while ($low <= $high) {
            $mid = intdiv($low + $high, 2);

            if ($data[$mid] == $target) {
                return $mid;
            } elseif ($data[$mid] < $target) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }

        return null;
    }
}
