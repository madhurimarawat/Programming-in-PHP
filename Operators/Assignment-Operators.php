<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Operators in PHP</title>
</head>
<body>
    
<?php

# Assignment operator is used to assign values to variables

echo "<p>Using Assignment Operators in PHP</p>";

# Assigning Variables using = Operator
# Simply assign value to variable
$age=25;
echo "<p>Using = Operator</p>";
echo "<p>Variable is: $age</p>";

# Assigning Variables using += Operator
# Add and assign value to variable
echo "Before Assignment Variable is: $age";
$age+=25;
echo "<p>Using +=25 Operator</p>";
echo "<p>Variable is: $age</p>";

# Assigning Variables using -= Operator
# Subtract and assign value to variable
echo "Before Assignment Variable is: $age";
$age-=5;
echo "<p>Using -=5 Operator</p>";
echo "<p>Variable is: $age</p>";

# Assigning Variables using *= Operator
# Multiply and assign value to variable
echo "Before Assignment Variable is: $age";
$age*=5;
echo "<p>Using *=5 Operator</p>";
echo "<p>Variable is: $age</p>";

# Assigning Variables using /= Operator
# Divide and assign value to variable
echo "Before Assignment Variable is: $age";
$age/=15;
echo "<p>Using /=15 Operator</p>";
echo "<p>Variable is: $age</p>";

# Assigning Variables using %= Operator
# Find remainder and assign value to variable
echo "Before Assignment Variable is: $age";
$age%=5;
echo "<p>Using %=5 Operator</p>";
echo "<p>Variable is: $age</p>";

# Assigning Variables using **= Operator
# Find exponent and assign value to variable
$a=5;
echo "Before Assignment Variable is: $a";
$a**=5;
echo "<p>Using **=5 Operator</p>";
echo "<p>Variable is: $a</p>";

# Assigning Variables using &= Operator
# Find Bitwise AND and assign value to variable
$a=15;
echo "Before Assignment Variable is: $a";
$a&=3;
echo "<p>Using &=5 Operator</p>";
echo "<p>Variable is: $a</p>";

# Assigning Variables using |= Operator
# Find Bitwise OR and assign value to variable
$a=15;
echo "Before Assignment Variable is: $a";
$a|=3;
echo "<p>Using |=5 Operator</p>";
echo "<p>Variable is: $a</p>";

# Assigning Variables using ^= Operator
# Find Bitwise XOR and assign value to variable
$a=15;
echo "Before Assignment Variable is: $a";
$a^=3;
echo "<p>Using ^=5 Operator</p>";
echo "<p>Variable is: $a</p>";

# Assigning Variables using <<= Operator
# Find Left Shift and assign value to variable
$a=15;
echo "Before Assignment Variable is: $a";
$a<<=3; # Left Shift by Three Bits
echo "<p>Using <<=3 Operator</p>";
echo "<p>Variable is: $a</p>";

# Assigning Variables using >>= Operator
# Find Right Shift and assign value to variable
$a=15;
echo "Before Assignment Variable is: $a";
$a>>=3; # Right Shift by Three Bits
echo "<p>Using >>=3 Operator</p>";
echo "<p>Variable is: $a</p>";


?>

</body>
</html>