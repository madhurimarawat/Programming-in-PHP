<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in PHP</title>
</head>
<body>

<?php

# Functions are a way of grouping a series of statements that perform a specific task
# Functions make the code reusable

echo "<p>Using Functions in PHP</p>";

# Functions with No Argument
echo "<p>Functions with No Argument</p>";

function greet(){
    echo "<p>Hello, How are You?</p>";
}
# Calling the function
greet();

# Functions with One Argument
echo "<p>Functions with One Argument</p>";

function greetUser($n){
    echo "<p>Hello $n</p>";
}
# Calling the function
greetUser("Jack");

# Functions with Three Argument and return value
echo "<p>Functions with Three Argument and Return Value</p>";

function calc($n1,$n2,$n3){
    return $n1+$n2+$n3;
}
# Calling the function
echo "<p>Result of Addition is: ",calc(12,56,78),"</p>";

    ?>

</body>
</html>