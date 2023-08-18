<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operators in PHP</title>
</head>
<body>
    
<?php

# . is Concatenation operator, which is used to concatenate two strings

echo "<p>Using String Operators in PHP</p>";

# Creating Variables
$s1 = "Hello";
$s2="World";

# Concatenating 
echo "String 1 is: $s1";
echo "<br><br>String 1 is: $s2";
echo "<p>Using . Operator</p>";
echo $s1." ".$s2;

# We can also store result in a variable
$result=$s1." ".$s2;
echo "<p>Storing value in a variable.</p>";
echo "<p>Result variable is: ",$result,"</p>";

?>

</body>
</html>