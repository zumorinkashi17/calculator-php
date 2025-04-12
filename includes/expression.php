<?php

    if (!isset($_POST['expression'])) {
        $_POST['expression'] = ''; // Initialize the expression if it's not set
    }

    $expression = $_POST['expression'];

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $button = $_POST['button'];

        switch($button){
            case 'C':
                $expression = '';
                break; 
            
            case 'DEL':
                $expression = substr($expression, 0, -1);
                break;

            case '=':
                $expression = calculateResult($expression);
                break;
            
            case 'x':
                $expression .= '*';
                break;
            
            
            case '÷':
                $expression .= '/';
                break;

            case '%':
            case '+':
            case '-':
                $expression .= " $button ";
                break;
            
            case '.':
                // Add the decimal point
                if (empty($expression) || substr($expression, -1) == ' ' || strpos(substr($expression, strrpos($expression, ' ') + 1), '.') === false) {
                    $expression .= $button;
                }
                break;
            
            default:
                // For number buttons
                $expression .= $button;
                break;
        }
    }

    function calculateResult($expression) {
        // Split the expression into numbers and operators
        $tokens = preg_split("/([+\-\/\*])/i", $expression, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
        
        if (count($tokens) < 3) {
            return $expression; // If there's not enough to calculate, return the original expression
        }
        
        // Initialize the result with the first number
        $result = floatval($tokens[0]);
        
        // Perform the operations
        for ($i = 1; $i < count($tokens); $i += 2) {
            $operator = $tokens[$i];
            $number = floatval($tokens[$i + 1]);
        
            // Check if the number has a percentage
            if (strpos($tokens[$i + 1], '%') !== false) {
                // Remove the '%' and calculate the percentage
                $number = floatval($tokens[$i + 1]);
                $percentage = $number / 100;
                
                switch ($operator) {
                    case '+':
                        $result += ($result * $percentage);  // Add percentage of result
                        break;
                    case '-':
                        $result -= ($result * $percentage);  // Subtract percentage of result
                        break;
                    case '*':
                        $result *= ($result * $percentage);  // Multiply by percentage of result
                        break;
                    case '/':
                        if ($result * $percentage != 0) {
                            $result /= ($result * $percentage);  // Divide by percentage of result
                        } else {
                            return 'Error';  // Handle division by zero
                        }
                        break;
                }
            } else {
                // Regular operations if no percentage
                switch ($operator) {
                    case '+':
                        $result += $number;
                        break;
                    case '-':
                        $result -= $number;
                        break;
                    case '*':
                        $result *= $number;
                        break;
                    case '/':
                        if ($number != 0) {
                            $result /= $number;
                        } else {
                            return 'Error';  // Handle division by zero
                        }
                        break;
                }
            }
        }
        
        return $result;
    }

?>