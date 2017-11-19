<?php

namespace lessons\sixth;

use leovujanic\codility\lessons\sixth\distinct;

/**
 * Class DistinctTest
 *
 * @package lessons\sixth
 */
class DistinctSolutionTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    /**
     * @var array
     */
    protected static $defaultArray = [2, 1, 1, 2, 3, 1];
    
    
    public function test_DistinctSolution_DefaultArrayAsInput_ExpectsResultIsEqualToThree()
    {
        $result = distinct\solution(static::$defaultArray);
        
        return $this->assertEquals(3, $result);
    }
    
    public function test_DistinctSolution_ArrayWithSingleElementProvided_ExpectsResultIsEqualToOne()
    {
        $result = distinct\solution([30011988]);
        
        return $this->assertEquals(1, $result);
    }
    
    
    public function test_DistinctSolution_ArrayThreeDistinctValuesProvided_ExpectsResultIsEqualToThree()
    {
        $result = distinct\solution([10, 10, 10, 10, 2, 6789, 6789]);
        
        return $this->assertEquals(3, $result);
    }
    
    public function test_DistinctSolution_EmptyArrayAsInput_ExpectsResultIsEqualZero()
    {
        $result = distinct\solution([]);
        
        return $this->assertEquals(0, $result);
    }
}
