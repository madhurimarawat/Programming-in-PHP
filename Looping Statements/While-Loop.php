<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop in PHP</title>
</head>
<body>

<?php

# Loops are used to repeat a set of statements till a specific condition
# While loop execute till condition is true
# It stops after Condition is false

echo "<p>Using While Loop in PHP</p>";

# Creating Variable
# Initialization
$x=1; 

echo "Numbers from 1 to 10 using while loop are: ";

# Printing Numbers from 1 to 10
while($x<=10){
    echo $x." ";
    $x++;
}

# Creating Variable
# Initialization
$y=10; 

echo "<br><br>Numbers from 10 to 1 using while loop are: ";

# Printing Numbers from 10 to 1
while($y>=1){
    echo $y." ";
    $y--;
}

echo "<br><br>Even Numbers from 10 to 1 using while loop are: ";
$y=10;

# Printing Even Numbers
while($y>=1){
    if($y%2==0){
    echo $y." ";}
    $y--;
}

echo "<p>Half Pattern using while loop is: </p>";


# Printing Half Pattern 
$x=1;
while($x<=5){
    $y=1;
    while($y<=$x){
        $y++;
        echo "* ";
    }
    $x++;
    echo "<br>";
}

echo "<p>Inverted Half Pattern using while loop is: </p>";

# Printing Inverse Pattern 
$x=1;
while($x<=5){
    $y=5;
    while($y>=$x){
        $y--;
        echo "* ";
    }
    $x++;
    echo "<br>";
}

echo "<p>Fibonacci Series using while loop is: </p>";

# Taking Number of terms as input

# Printing Fibonacci Series
$f0=0;
$f1=1;
echo $f0."&nbsp;".$f1."&nbsp;";
$i=0;
$n=7;
while($i<$n-2){

    # Calculating next term
    $fn=$f0+$f1;

    # Printing next term
    echo $fn."&nbsp;";

    # Storing value in variables
    $f0=$f1;
    $f1=$fn;

    # Incrementing
    $i++;
}

?>
</body>
</html>
