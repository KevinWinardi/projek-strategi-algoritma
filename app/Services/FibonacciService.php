<?php 
namespace App\Services;

class FibonacciService{
    public function fibonacciCount($n){
        if ($n < 2) {
            return $n;
        } else {
            return $this->fibonacciCount($n - 1) + $this->fibonacciCount($n - 2);
        }
    }
}
?>