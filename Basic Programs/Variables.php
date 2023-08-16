<?php

# Using PHP Only
# Variables are temporary storage spaces
# When we create a variable operating system allocate memory according to the data size
# Variable is an identifier,first declare then initialize

# Creating a Variable
# $c; # Declaring a Variable
# $c = 23; # Initialization

# Declaration and Initialization can be done in one line
$c=34;
$gender="Female";
$price= 23.4;

# If we try to access variabe name without $ sign, it will give error
echo "Variable c is: ",$c;
# echo "Variable c is: ",$C; Error as PHP is Case Sensitive

# For printing variable name in echo we can use , or . (Using Multiple arguments)
echo "<br><br>Variable gender is: ",$gender;
echo "<br><br>Variable price is: ".$price;

# Updating Variable Value
$c=55;
echo "<br><br>Updated Variable c is: ",$c;

# Performing Operations on Variables
$d=90;
echo "<br><br>Variable d is: ",$c;
$result=$c +$d;
echo "<br><br>Addition of Variable c and Variable d is: ",$result;
echo "<br><br>Subtraction of Variable c and Variable d is: ",$c-$d;
echo "<br><br>Multiplication of Variable c and Variable d is: ",$c*$d;
echo "<br><br>Division of Variable c and Variable d is: ",$c/$d;

# Creating variable name starting from number
# $12V=90;
# This will give the Following error
# Parse error: syntax error, unexpected integer "12", expecting variable or "{" or "$" in C:\xampp\htdocs\PHP Programming\Basic Programs\Variables-Constants.php on line 36

# Creating variable name ending with number
$V12=90;
echo "<br><br>Variable name ending with number is:",$V12;

# Creating variable name with space
# $First name="Hello";
# This will give the Following error
# Parse error: syntax error, unexpected identifier "name" in C:\xampp\htdocs\PHP Programming\Basic Programs\Variables-Constants.php on line 45

# To remove this error we can use underscore between first and last name
$First_name="Hello";
echo "<br><br>Variable name with underscore is:",$First_name;

?>

<!-- Embedding within HTML-->
<!-- To embed PHP in HTML we can just write php code inside HTML body or head tag-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables in PHP</title>
</head>
<body>
<?php

$c=34;
$gender="Female";
$price= 23.4;

# If we try to access variabe name without $ sign, it will give error
echo "Variable c is: ",$c;
# echo "Variable c is: ",$C; Error as PHP is Case Sensitive

# For printing variable name in echo we can use , or . (Using Multiple arguments)
echo "<br><br>Variable gender is: ",$gender;
echo "<br><br>Variable price is: ".$price;

# Updating Variable Value
$c=55;
echo "<br><br>Updated Variable c is: ",$c;

# Performing Operations on Variables
$d=90;
echo "<br><br>Variable d is: ",$c;
$result=$c +$d;
echo "<br><br>Addition of Variable c and Variable d is: ",$result;
echo "<br><br>Subtraction of Variable c and Variable d is: ",$c-$d;
echo "<br><br>Multiplication of Variable c and Variable d is: ",$c*$d;
echo "<br><br>Division of Variable c and Variable d is: ",$c/$d;

# Creating variable name starting from number
# $12V=90;
# This will give the Following error
# Parse error: syntax error, unexpected integer "12", expecting variable or "{" or "$" in C:\xampp\htdocs\PHP Programming\Basic Programs\Variables-Constants.php on line 36

# Creating variable name ending with number
$V12=90;
echo "<br><br>Variable name ending with number is:",$V12;

# Creating variable name with space
# $First name="Hello";
# This will give the Following error
# Parse error: syntax error, unexpected identifier "name" in C:\xampp\htdocs\PHP Programming\Basic Programs\Variables-Constants.php on line 45

# To remove this error we can use underscore between first and last name
$First_name="Hello";
echo "<br><br>Variable name with underscore is:",$First_name;

?>

</body>
</html>