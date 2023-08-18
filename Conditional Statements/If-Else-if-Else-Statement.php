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
$marks=90;
echo "<p>Marks is: $marks</p>";

# Using if-else-if-else statement
echo "<p>Using If-Else-if-Else Statement</p>";

if($marks>=90){
    echo "<p>Grade is: A</p>";
}
else if($marks>=80){
    echo "<p>Grade is: B</p>";
}
else if($marks>=70){
    echo "<p>Grade is: C</p>";
}
else if($marks>=60){
    echo "<p>Grade is: D</p>";
}
else if($marks>=40){
    echo "<p>Grade is: E</p>";
}
else {
    echo "<p>Better Luck Next Time!</p>";
}
?>
</body>
</html>