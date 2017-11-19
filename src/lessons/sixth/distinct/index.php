<?php
/**
 * User: leonardvujanic
 * DateTime: 18/11/2017 21:47
 *
 * Task: https://codility.com/programmers/lessons/6-sorting/distinct/
 * Results: https://codility.com/demo/results/training8JN8CJ-6H9/
 */


namespace leovujanic\codility\lessons\sixth\distinct;

/**
 * @param array $A
 *
 * @return int
 */
function solution(array $A)
{
    $distinctValues = [];
    
    foreach ($A as $a) {
        $distinctValues[$a] = null;
    }
    
    return count($distinctValues);
}
