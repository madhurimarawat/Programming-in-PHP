<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop in PHP</title>
</head>
<body>
    
<?php


# Loops are used to repeat a set of statements till a specific condition
# For loop execute till condition is true
# It stops after Condition is false

echo "<p>Using For Loop in PHP</p>";

# Initialization and increment/decrement can be done directly in the loop

echo "Numbers from 1 to 10 using For loop are: ";

# Printing Numbers from 1 to 10
for($x=1;$x<=10;$x++){
    echo $x." ";
}

echo "<br><br>Numbers from 10 to 1 using For loop are: ";

# Printing Numbers from 10 to 1
for($y=10;$y>=1;$y--){
    echo $y." ";
}

echo "<br><br>Even Numbers from 10 to 1 using For loop are: ";
$y=10;

# Printing Even Numbers
for($y=10;$y>=1;$y--){
    if($y%2==0){
    echo $y." ";}
}

echo "<br><br>Half Pattern using For loop is: <br>";


# Printing Half Pattern 
for($x=1; $x<=5; $x++){
    for($y=1; $y<=$x; $y++){
        echo "* ";
    }
    echo "<br>";
}

echo "<br><br>Inverted Half Pattern using For loop is: <br>";

# Printing Inverse Pattern 
for($x=1; $x<=5; $x++){
    for($y=5; $y>=$x; $y--){
        echo "* ";
    }
    echo "<br>";
}

?>

</body>
</html>