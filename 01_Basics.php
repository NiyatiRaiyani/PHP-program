<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    This is my first php website
   <?php
   define('PI',3.14);
        echo "<br>";
        echo "Hello world and this is printed using php";
        echo "<br>";
        // Single line comment
        /*
        This
        is 
        a 
        multi
        line
        comment
        */

        $variable1 = 34;
        $variable2 = 20;

        echo $variable1;
        echo "<br>";
        echo $variable2;
        echo "<br>";

        echo $variable1+$variable2;
        echo "<br>";

        // Operators in php
        // Arithmetic Operators
        echo "<h1> Arithmetic Operators </h1>";
        echo "The value of variable1 + variable2 is ";
        echo $variable1 + $variable2;
        echo "<br>";

        echo "The value of variable1 - variable2 is ";
        echo $variable1 - $variable2;
        echo "<br>";

        echo "The value of variable1 * variable2 is ";
        echo $variable1 * $variable2;
        echo "<br>";  

        echo "The value of variable1 / variable2 is ";
        echo $variable1 / $variable2;
        echo "<br>";

        // Assignment Operators
        echo "<h1> Assignment Operators </h1>";
        $newVar = $variable1;
        // $newVar += 1;
        // $newVar -= 1;
        // $newVar *= 2;
        $newVar /= 2;
        echo "The value of new variable is ";
        echo $newVar;
        echo "<br>";

        // Comparison Operators
        echo "<h1> Comparison Operators </h1>";
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";

        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";

        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";

        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";

        // Increament/Decreament Operators
        echo "<h1> Increament/Decreament Operators </h1>";
        echo $variable1++;
        echo "<br>";
        echo $variable1;
        // $variable1++; 34 35 
        // $variable1--; 34 33
        // ++$variable1; 35 35
        // --$variable1; 33 33   

        // Logical Operator

        echo "<h1> Logical Operators </h1>";
        // and (&&)
        // or (||)
        // xor 
        // ! 
        // bool(true)
        // $myVar = (true and true);
        // bool(false)
        // $myVar = (true and false);
        // $myVar = (false and false);
        // $myVar = (false and true);

        $myVar = (false xor false);
        echo var_dump($myVar);
        ?>

    <?php
        // Data type in php
        // 1.String
        // 2.Integer
        // 3.Float
        // 4.Boolean
        // 5.Array
        // 6.Object

        echo "<br>";
        echo "<h1> Data Types </h1>";

        $var ="This is a String";
        echo var_dump($var);
        echo "<br>";

        $var = 67;
        echo var_dump($var);
        echo "<br>";

        $var = 67.12;
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";
        echo PI;
    ?>
    
    </div>
</body>
</html>