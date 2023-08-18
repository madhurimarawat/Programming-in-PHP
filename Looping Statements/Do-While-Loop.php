<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While Loop in PHP</title>
</head>
<body>

<?php

# Loops are used to repeat a set of statements till a specific condition
# Do While loop execute till condition is true
# It stops after Condition is false but atleast one time statement is still executed

echo "<p>Using Do While Loop in PHP</p>";

# Creating Variable
# Initialization
$x=1; 

echo "Numbers from 1 to 10 using Do While loop are: ";

# Printing Numbers from 1 to 10
do{
    echo $x." ";
    $x++;
}while($x<=10);

# Creating Variable
# Initialization
$y=10; 

echo "<br><br>Numbers from 10 to 1 using Do While loop are: ";

# Printing Numbers from 10 to 1
do{
    echo $y." ";
    $y--;
}while($y>=1);

echo "<br><br>Even Numbers from 10 to 1 using Do While loop are: ";
$y=10;

# Printing Even Numbers
do{
    if($y%2==0){
    echo $y." ";}
    $y--;
}while($y>=1);

echo "<br><br>Half Pattern using Do While loop is: <br>";


# Printing Half Pattern 
$x=1;
do{
    $y=1;
    do{
        $y++;
        echo "* ";
    }while($y<=$x);
    $x++;
    echo "<br>";
}while($x<=5);

echo "<br><br>Inverted Half Pattern using Do While loop is: <br>";

# Printing Inverse Pattern 
$x=1;
do{
    $y=5;
    do{
        $y--;
        echo "* ";
    }while($y>=$x);
    $x++;
    echo "<br>";
}while($x<=5);

?>
</body>
</html>