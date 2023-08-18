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

# If Statement
# It execute if block of code if condition is true and for false does nothing

# Creating Variables
$a=90;
echo "<p>Variable a is: $a</p>";

# Using if statement
echo "<p>Using If Statement</p>";

if($a>78){
    echo "<p>Variable a $a is greater than 78</p>";
}

# If Statement
# It execute if block of code if condition is true and for false execute else block

# Using if else statement
echo "<p>Using If Else Statement</p>";

if($a>100){
    echo "<p>Variable a $a is greater than 100</p>";
}else{
    echo "<p>Variable a $a is not greater than 100</p>";
}

    ?>
</body>
</html>