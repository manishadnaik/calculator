<?php

namespace Calculator\Validator;

/**
 * A validator class to validate input string
 */
class InputStringValidator 
{
    /**
     * Function to validate the input string
     * @return boolean
     */
    public static function isValid(string $numbers) 
    {    
        // check if ts string
        if (!is_string($numbers))
            return false;

        // check if number string in proper format
        if(preg_match('/[A-Za-z]+/', $numbers)) {
            return false;
        }
        
        // return true if valid
        return true;
    }
}
?>