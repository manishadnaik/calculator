<?php
namespace Test\Calculator;

use Calculator\Services\CalculatorService;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * Calculator service
     */
    private $calculatorService;

    /**
     * Setup function
     */
    public function setUp()
    {
        $this->calculatorService = new CalculatorService();
    }

    /**
     * input for multiple numbers
     * 
     * @return array
     */
    public function inputForMultipleNumbers()
    {
        return array(
            array('2,3', 5),
            array('4,5,6', 15),
            array('2,3,4,5', 14),
            array('4,7,3,4,7,3,5,6,7,4,3,2,5,7,5,3,4,6,7,8,9,5,5,5,4,3,2', 133),
            array('2,3,4,5', 14),
        );
    }

    /**
     * Test case to test the adding of multiple comma seperated numbers
     * 
     * @dataProvider inputForMultipleNumbers
     */
    public function testAddWithMultiNumbersWithSameDelimiter($params, $expectedResult)
    {
       $result = $this->calculatorService->sum($params);
        $this->assertSame($expectedResult, $result, 'Add with multiple parameters with mutiple delimiters do not returns correct sum');  
    }
}