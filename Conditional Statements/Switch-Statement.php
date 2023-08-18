<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decision Making Statements in PHP</title>
</head>
<body>
<?php

# Decision Making is a process in programming that allows a program to choose between two or more possible options based on condition
# It is also known as Conditional or Flow Control Statements

echo "<p>Using Decision Making Statements in PHP</p>";

# Switch Statement
# It execute block of code if case matches else it prints default case

# Creating Variables
$a=12;
echo "<p>Variable a is: $a</p>";

# Using switch statement
echo "<p>Using Switch Statement</p>";

# Putting break after each case is very necessary else it will execute all cases after that matching cases

switch($a){

    case 12:
    echo "<p>Variable a $a is equal to 12</p>";
    break;

    case 22:
    echo "<p>Variable a $a is equal to 22</p>";
    break;

    case 78:
    echo "<p>Variable a $a is equal to 78</p>";
    break;

    case 54:
    echo "<p>Variable a $a is equal to 54</p>";
    break;

    default:
    echo "<p>Variable a $a is not equal to any of the values</p>";

}
?>
    
</body>
</html>