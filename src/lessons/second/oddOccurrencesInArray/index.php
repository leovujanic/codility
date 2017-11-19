<?php
/**
 * User: leonardvujanic
 * DateTime: 18/11/2017 21:46
 *
 * task: https://codility.com/programmers/lessons/2-arrays/odd_occurrences_in_array/
 * results: https://codility.com/demo/results/trainingWRKE9Z-TBQ/
 */


namespace leovujanic\codility\lessons\second\oddOccurrencesInArray;

/**
 * @param $A
 *
 * @return mixed
 */
function solution($A)
{
    if (count($A) % 2 === 0) {
        throw new \InvalidArgumentException('Array length must be odd');
    }
    
    sort($A);
    
    $lastVal = reset($A);
    $occurred = 0;
    
    foreach ($A as $a) {
        
        if ($lastVal === $a) {
            $occurred += 1;
            continue;
        }
        
        if ($occurred % 2 === 0) {
            $lastVal = $a;
            $occurred = 1;
            continue;
        }
        
        return $lastVal;
    }
    
    return $lastVal;
}