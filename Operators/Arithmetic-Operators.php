<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operator in PHP</title>
</head>
<body>
    
<?php

# Operator is a set of symbol that represent an action or calculation
# It is used to perform an operation on one or more values called operands to produce a result
# Arithmetic Operators are used to perform arithmetic operation on operands

# Defining variables
$a=90;
$b=89;

echo "<p>Arithmetic Operators in PHP</p>";

# Addition +
$add=$a + $b;
echo "<p> Using Addition + Operator</p>";
echo "<p> $a + $b = $add</p>";

# Subtraction -
$sub=$a - $b;
echo "<p> Using Subtraction - Operator</p>";
echo "<p> $a - $b = $sub</p>";

# Multiplication *
$mul=$a * $b;
echo "<p> Using Multiplication * Operator</p>";
echo "<p> $a * $b = $mul</p>";

# Division /
$div=$a / $b;
echo "<p> Using Division / Operator</p>";
echo "<p> $a / $b = $div</p>";

# Modulus %
# Gives Reamainder of division
$mod=$a % $b;
echo "<p> Using Modulus % Operator</p>";
echo "<p> $a % $b = $mod</p>";

# Exponentiation **
# Gives Exponent of value
$exp=$a ** $b;
echo "<p> Using Exponentiation ** Operator</p>";
echo "<p> $a ** $b = $exp</p>";

?>

</body>
</html>