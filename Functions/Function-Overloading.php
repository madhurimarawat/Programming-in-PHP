<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Overloading in PHP</title>
</head>
<body>
<?php

# PHP does not support Function overloading
# All function should have unique name
# In this code we are trying to implement function overlaoding using switch case

# Writing Function for Calculation
# Using this one function, we can perform more than one task
function calc($a,$b,$o){
    switch($o){
        case '+':
            echo "Addition is: ";
            return $a + $b;

        case '-':
            echo "Subtraction is: ";
            return $a - $b;
         
        case '*':
            echo "Multiplication is: ";
            return $a * $b;

        case '/':
            echo "Division is: ";
            return $a / $b;

        case '%':
            echo "Modulus is: ";
            return $a % $b;
            
        case '**':
            echo "Exponential is: ";
            return $a ** $b;
        
        default:
        echo "Invalid Case";
    }
}
    
# Calling the function
echo "Variables are 3 and 4"."<br><br>";
echo calc(3,4,'+')."<br><br>";   
echo calc(3,4,'-')."<br><br>";
echo calc(3,4,'*')."<br><br>";
echo calc(3,4,'/')."<br><br>";
echo calc(3,4,'%')."<br><br>";
echo calc(3,4,'**')."<br><br>";
    
    ?>
    
</body>
</html>