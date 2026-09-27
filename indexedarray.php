<?php

$depts = array("CSE", "IT", "CIVIL", "MECHANICAL");

echo "Departments in University are:<br>";

echo $depts[0]."<br>";
echo $depts[1]."<br>";
echo $depts[2]."<br>";
echo $depts[3]."<br>";

echo "<br>Alternate to print values:<br>";

foreach($depts as $student)
{
    echo "Dept: ".$student."<br>";
}

?>