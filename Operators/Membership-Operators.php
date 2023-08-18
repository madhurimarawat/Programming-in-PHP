<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Operators in PHP</title>
</head>
<body>
    
<?php

# Membership operator are used to test whether a value exists within a certain set or not

echo "<p>Using Membership Operators in PHP</p>";

# Using in_array() Operator
# Checks if a value is present in array or not
# Argument-First value to be found,then array
echo "<p>Using in_array() Operator</p>";

# Creating Array
$arr=array(1,2,33,66,74,14,10);
$ele=14;
echo "<p>Element to be checked is: $ele</p>";
if(in_array($ele,$arr)){
    echo "<p>Element $ele is present in array.</p>";
}else{
    echo "<p>Element $ele is not present in array.</p>";
}

# Using strstr() Operator
# Checks if a value is present in string or not
# Argument-First String,then value to be found
echo "<p>Using strstr() Operator</p>";

# Creating Array
$str="Hello world!";
$sub="worl";
echo "<p>String is: $sub</p>";
echo "<p>Substring to be checked is: $sub</p>";
if(strstr($str,$sub)){
    echo "<p>Substring $sub is present in array.</p>";
}else{
    echo "<p>Substring $sub is not present in array.</p>";
}

?>

</body>
</html>