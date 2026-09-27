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

        $newVar = $variable1;
        // $newVar += 1;
        // $newVar -= 1;
        // $newVar *= 2;
        $newVar /= 2;
        echo "The value of new variable is ";
        echo $newVar;
        echo "<br>";


        // Comparison Operators
        // Increament/Decreament Operators
        // Logical Operator

    ?>

    <?php
        echo "Hello world again";
        echo "<br>";
    ?>
    </div>
</body>
</html>