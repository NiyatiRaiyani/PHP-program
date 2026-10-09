<?php
include('./teacher.php');
include('./student.php');

$t1 = new teacher\joiningdetails();
$t1->joindate();
$s1 = new student\joiningdetails();
$s1->joindate();

?>