<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators in PHP</title>
</head>
<body>
    
<?php

# Logical Operator are used to check condition and return true or false(based on that condition)
# Returns true(1) or false(0) value

# Defining Variables
$age=25;
$gender="female";
$is_student=true;
$is_employed=false;

echo "<p>Using Logical Operators in PHP</p>";

# Using the AND && Operator
# AND only returns True when both the operands are true
echo "<p>Using AND && Operator</p>";
if($age>18 && $is_student=false){
    echo "<p>You are eligible for voting.</p>";
}else{
    echo "<p>You are not eligible for voting.</p>";
}

# Using the OR || Operator
# OR returns True if either of the operands is true
echo "<p>Using OR || Operator</p>";
if($gender="male" || $gender="female"){
    echo "<p>You have selected a valid gender.</p>";
}else{
    echo "<p>You have not selected a valid gender.</p>";
}

# Using the NOT ! Operator
# NOT Simply Returns the negation of statement
echo "<p>Using NOT ! Operator</p>";
if(!$is_student){
    echo "<p>You are not a student.</p>";
}else{
    echo "<p>You are a student.</p>";
}

# Using the XOR xor Operator
# XOR returns true if one of the two expressions being evaluated is true, but not both
echo "<p>Using XOR xor Operator</p>";
if(!$is_student xor $is_employed){
    echo "<p>You are either a student or employed but not both.</p>";
}else{
    echo "<p>You are either both a student or employed,or neither.</p>";
}

?>

</body>
</html>