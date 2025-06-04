<?php 
namespace App\Services;

class SortingService{
    public function bubbleSort($arr){
        $n = count($arr);
        $start = microtime(true);

        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }

        $end = microtime(true);

        $duration = $end - $start;
        $executionTime = round($duration * 1000, 4) . ' ms';

        return compact('arr', 'executionTime');
    }

    public function selectionSort($arr){
        $n = count($arr);
        $start = microtime(true);

        for ($i = 0; $i < $n - 1; $i++) {
            $min_idx = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$j] < $arr[$min_idx]) {
                    $min_idx = $j;
                }
            }
            $temp = $arr[$min_idx];
            $arr[$min_idx] = $arr[$i];
            $arr[$i] = $temp;
        }
        $end = microtime(true);

        $duration = $end - $start;
        $executionTime = round($duration * 1000, 4) . ' ms';

        return compact('arr', 'executionTime');
    }
}
?>