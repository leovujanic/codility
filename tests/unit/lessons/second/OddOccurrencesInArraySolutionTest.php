<?php

namespace lessons\second;

use leovujanic\codility\lessons\second\oddOccurrencesInArray;

/**
 * Class OddOccurrencesInArrayTest
 *
 * @package lessons\second
 */
class OddOccurrencesInArraySolutionTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    
    /**
     * @var array
     */
    protected static $defaultArray = [9, 3, 9, 3, 9, 7, 9];
    
    
    public function test_OddOccurrencesInArraySolution_DefaultArrayAsInput_ExpectsResultIsEqualToSeven()
    {
        $result = oddOccurrencesInArray\solution(static::$defaultArray);
        
        return $this->assertEquals(7, $result);
    }
    
    public function test_OddOccurrencesInArraySolution_EvenArrayLengthProvided_ExpectsExceptionIsThrown()
    {
        $this->expectException(\InvalidArgumentException::class);
        oddOccurrencesInArray\solution([1, 2]);
    }
    
    public function test_OddOccurrencesInArraySolution_OddValueInTheFirstPlace_ExpectsResultIsEqualToTheFirstArrayValue()
    {
        $result = oddOccurrencesInArray\solution([1, 2, 2]);
        
        return $this->assertEquals(1, $result);
    }
    
    public function test_OddOccurrencesInArraySolution_OddValueInTheLastPlace_ExpectsResultIsEqualToTheLastArrayValue()
    {
        $result = oddOccurrencesInArray\solution([2, 2, 1]);
        
        return $this->assertEquals(1, $result);
    }
    
    
    public function test_OddOccurrencesInArraySolution_OddValueIsEqualToFivePlacedSomewhereInTheMiddleOfArray_ExpectsResultIsEqualToFive()
    {
        $result = oddOccurrencesInArray\solution([2, 2, 1, 1, 1, 1, 6, 6, 5, 9, 9, 9, 9, 7, 7, 7, 7]);
        
        return $this->assertEquals(5, $result);
    }
}
