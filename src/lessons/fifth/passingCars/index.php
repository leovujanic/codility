<?php
/**
 * User: leonardvujanic
 * DateTime: 18/11/2017 21:47
 *
 * Task: https://codility.com/programmers/lessons/5-prefix_sums/passing_cars/
 * Results: https://codility.com/demo/results/trainingG5CMUP-5M7/
 */

namespace leovujanic\codility\lessons\fifth\passingCars;


/**
 * @param $A
 *
 * @return int
 */
function solution(array $A)
{
    $zeroCount = 0;
    $sum = 0;
    
    foreach ($A as $a) {
        if ($a === 0) {
            $zeroCount++;
            continue;
        }
        
        $sum += $zeroCount;
        
        if ($sum > 1000000000) {
            return -1;
        }
    }
    
    return $sum;
}
