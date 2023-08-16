<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in PHP</title>
</head>
<body>

    <?php

    # Data types are built in and we can use them to store different kind of values

    # Integer data type- Used to store whole numbers
    $a=78;
    echo "Integer Data type variable is: ",$a;

    # Float(or doubles) data type- Used to store decimal numbers
    $b=78.99;
    echo "<br><br>Float Data type variable is: ",$b;

    # String data type- Used to store text(alphanumeric values)
    $c="Hello";
    echo "<br><br>String Data type variable is: ",$c;

    # Boolean data type- Used to store true or false value
    # Result as 1(true) or 0(false)
    $d=true;
    echo "<br><br>Boolean Data type variable is: ",$d;
    # It will display nothing for false
    echo "<br><br>Boolean Data type using condition 8>9 is: ",8>9;
    
    # Array data type- Used to store collection of values
    # Collection of elements having same data type
    $arr1=array(1,2,3,4,8,7,6);
    # Cannot directly display array, we need to use index number for displaying
    # Indexing start from 0
    echo "<br><br>Array Data type variable is: ",$arr1[1];

    # Object data type- Used to store an instance of a custom class
    # Used to implement object oriented programming in PHP
    class Test{
        public $name;
        public $age;

    }

    # Creating Object
    $obj=new Test;
    # Giving value to class variables using object
    $obj->name="abc";
    $obj->age=13;
    # We cannot print object directly
    # echo "<br><br>Object is: ",$obj;
    # Printing class variables
    echo "<br><br>Accessing name(class variable) using Object is: ",$obj->name;
    echo "<br><br>Accessing age(class variable) using Object is: ",$obj->age;

    # Null data type- Used to represent a variable with no value
    # Value can be assigned later to null variable
    $obj=NULL;
    # Dosen't print any value as variable is empty
    echo "<br><br>Null Data type variable is: ",$obj;
    # Giving value to obj
    $obj=90;
    echo "<br><br>Null Data type variable after giving value is: ",$obj;

?>

</body>
</html>