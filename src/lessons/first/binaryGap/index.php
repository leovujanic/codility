<?php
/**
 * User: leonardvujanic
 * DateTime: 21/11/2017 22:42
 *
 * Task: https://codility.com/programmers/lessons/1-iterations/binary_gap/
 * Results: https://codility.com/demo/results/training9W8K4S-W7C/
 */


namespace leovujanic\codility\lessons\first\binaryGap;

/**
 * @param int $N
 *
 * @return int
 */
function solution(int $N)
{
    $zeroGroups = explode(1, decbin($N));
    
    if ($zeroGroups[0] !== '') {
        $zeroGroups = array_slice($zeroGroups, 2);
    }
    
    array_pop($zeroGroups);
    
    $maxGap = 0;
    
    foreach ($zeroGroups as $zeroGroup) {
        $groupLen = strlen($zeroGroup);
        
        if ($groupLen > $maxGap) {
            $maxGap = $groupLen;
        }
    }
    
    return $maxGap;
}
