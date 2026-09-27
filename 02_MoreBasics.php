<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    max: width 80%;
    background-color: gray;
    margin: auto;
    padding: 23px;
}
</style>

<body>
    <div class="container">
    <h1> Lets learn about PHP</h1>
    <p> Your Party status is Here:</p>
    <?php
    $age = 19;
    if($age>=18)
        echo "You can go to the party";
    else if($age==7)
        echo "You are a 7 year old";
    else
        echo "You can not go to the party";
    
    echo "<br>";
    $languages = array("Python","C++","OOP","PHP");
    echo count($languages);
    echo "<br>";
    echo $languages[0];
    echo "<br>";
    echo $languages[2];
    echo "<br>";

    //Loops in PHP
    $a=0;
    while ($a <= 10) {
        echo " <br> The value of a from the while loop is :";
        echo $a;
        $a++;
    }
    echo "<br>";
    //Iterating arrays in PHP using while loop
    $a=0;
    while ($a < count($languages)) {
        echo " <br> The value of a from the while loop is :";
        echo $languages[$a];
        $a++;
    }

    echo "<br>";
    // do while loop
    $a=0;
    do {
        echo " <br> The value of a from the do while loop is :";
        echo $a;
        $a++;
    } while ($a < 10);

    echo "<br>";
    //for loop
    for ($a=0; $a <= 10; $a++) { 
        echo " <br> The value of a from the for loop is :";
        echo $a;
    }

    echo "<br>";
    //foreach loop   
    foreach ($languages as $value) {
        echo " <br> The value from foreach loop is :";
        echo $value;
    }

    echo "<br>";
    function print5(){
        echo "FIVE";
    }

    print5();
    echo "<br>";
    print5();
    echo "<br>";
    print5();
    echo "<br>";

    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }

    print_number(45);
    print_number(55);
    print_number(75);

    ?>
    </div>
</body>
</html>