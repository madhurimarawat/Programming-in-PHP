<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Operators in PHP</title>
</head>
<body>
    
<?php

# Conditional Operator is used to check condition
# ?: Ternary or Conditional Operator
# If condition is true, first statement is returned else second

echo "<p>Using Conditional Operators in PHP</p>";

# Creating variables
$a=9;

# Using operator ?:

# We cannot use echo in ternary operator
# ($a>8)? echo "a is greater than 8."; : echo "a is greater than 8.";
# This will give the following error
# Parse error: syntax error, unexpected token "echo" in C:\xampp\htdocs\PHP Programming\Operators\Conditional-Operators.php on line 22

# Operator returns argument we can print that
echo "<p>Returning Argument from Operator ?:</p>";
echo ($a>8)?"Variable a is greater than 8.":"Variable a is lesser than 8.";

# Storing return value in a variable
$result=($a>8)?"Variable a is greater than 8.":"Variable a is lesser than 8.";
echo "<p>Storing return value in a variable.</p>";
echo "<p>Result is: ",$result,"</p>";

?>

</body>
</html>