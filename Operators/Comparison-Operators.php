<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operator in PHP</title>
</head>
<body>
    
<?php

# Comparison Operators are used to compare two or more operands
# Returns true(1) or false(0) value

# Defining Variables
$n1=10;
$n2=89;
$s1="Hello";
$s2="World";

echo "<p>Using Comparison Operators in PHP</p>";

# == Equal to Operator
# Checks if the value of two operands is equal or not
echo "<p>Using == Equal to Operator</p>";
if($n1==$n2){
    echo "<p>Number 1 $n1 is equal to Number 2 $n2.</p>";
} else{
    echo "<p>Number 1 $n1 is not equal to Number 2 $n2.</p>";
}

# === Identical to Operator
# Checks if the value and data type of two operands is equal or not
echo "<p>Using === Identical to Operator</p>";
if($n1===$n2){
    echo "<p>Number 1 $n1 is identical to Number 2 $n2.</p>";
} else{
    echo "<p>Number 1 $n1 is not identical to Number 2 $n2.</p>";
}

# != Not Equal to Operator
# Checks if the value of two operands is equal or not
echo "<p>Using != Not Equal to Operator</p>";
if($n1!=$n2){
    echo "<p>Number 1 $n1 is not equal to Number 2 $n2.</p>";
    
} else{
    echo "<p>Number 1 $n1 is equal to Number 2 $n2.</p>";
}

# <> Not Equal to Operator(Alternate symbol)
# Checks if the value of two operands is equal or not
echo "<p>Using <> Not Equal to Operator</p>";
if($n1<>$n2){
    echo "<p>Number 1 $n1 is not equal to Number 2 $n2.</p>";
    
} else{
    echo "<p>Number 1 $n1 is equal to Number 2 $n2.</p>";
}

# !== Not Identical to Operator
# Checks if the value and data type of two operands is equal or not
echo "<p>!== Not Identical to Operator</p>";
if($n1!==$n2){
    echo "<p>Number 1 $n1 is not identical to Number 2 $n2.</p>";
} else{
    echo "<p>Number 1 $n1 is identical to Number 2 $n2.</p>";
}

# < Less than Operator
# Checks if operand 1 is lesser than operand 2 or not
echo "<p>< Less than Operator</p>";
if($n1<$n2){
    echo "<p>Number 1 $n1 is lesser than Number 2 $n2.</p>";
} else{
    echo "<p>Number 1 $n1 is not lesser than Number 2 $n2.</p>";
}

# > Greater than Operator
# Checks if operand 1 is greater than operand 2 or not
echo "<p>> Greater than Operator</p>";
if($n1>$n2){
    echo "<p>Number 1 $n1 is greater than Number 2 $n2.</p>";
} else{
    echo "<p>Number 1 $n1 is not greater than Number 2 $n2.</p>";
}

# <= Less than Operator
# Checks if operand 1 is lesser than or equal to operand 2 or not
echo "<p><= Less than or equal to Operator</p>";
if($n1<$n2){
    echo "<p>Number 1 $n1 is lesser or equal tothan Number 2 $n2.</p>";
} else{
    echo "<p>Number 1 $n1 is not lesser or equal to than Number 2 $n2.</p>";
}

# >= Greater than Operator
# Checks if operand 1 is greater than or equal to operand 2 or not
echo "<p>>= Greater than or equal to Operator</p>";
if($n1>$n2){
    echo "<p>Number 1 $n1 is greater than or equal to Number 2 $n2.</p>";
} else{
    echo "<p>Number 1 $n1 is not greater than or equal to Number 2 $n2.</p>";
}

?>

</body>
</html>