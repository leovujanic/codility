<?php

namespace lessons\fifth;

use leovujanic\codility\lessons\fifth\passingCars;

/**
 * Class PassingCarsTest
 *
 * @package lessons\fifth
 */
class PassingCarsSolutionTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    /**
     * @var array
     */
    protected static $defaultArray = [0, 1, 0, 1, 1];
    
    
    public function test_PassingCarsSolution_DefaultArrayAsInput_ExpectsResultIsEqualToFive()
    {
        $result = passingCars\solution(static::$defaultArray);
        
        return $this->assertEquals(5, $result);
    }
    
    
    public function test_PassingCarsSolution_WhenPassingsExceedOneBillion_ExpectsResultIsEqualToMinusOne()
    {
        $zeroCars = array_fill(0, 500000, 0);
        $oneCars = array_fill(0, 2001, 1);
        
        $result = passingCars\solution(array_merge($zeroCars, $oneCars));
        
        return $this->assertEquals(-1, $result);
    }
}
