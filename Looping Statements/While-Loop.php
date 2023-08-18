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

echo "<br><br>Half Pattern using while loop is: <br>";


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

echo "<br><br>Inverted Half Pattern using while loop is: <br>";

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

?>
</body>
</html>
