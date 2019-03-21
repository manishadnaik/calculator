<?php

namespace Calculator\Services;

class CalculatorService 
{


    /**
     * Function to perform sum operation on given input
     * 
     * @param string $input The string og numbers passed to perform sum
     * @return string
     */
    public function sum(string $input): string 
    {
        $numberArray = $this->prepareNumbers($input);

        return array_sum($numberArray);
    }

    /**
     * Function to prepare numbers from given numbers string
     * 
     * @param string $input The string of numbers passed to perform sum
     * @return array
     */
    public function prepareNumbers(string $input): array 
    {
        if (empty($input))
            return 0;

        if (!is_string($input))
            throw new \InvalidArgumentException('Parameters must be single string of input seperated by commas(,)');

        return explode(',', $input);
    }
}
?>