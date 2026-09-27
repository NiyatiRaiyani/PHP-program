<?php
session_start();
?>

<h2>Session Data</h2>

<?php
if (isset($_SESSION['username']))
{
    echo "Username: " . $_SESSION['username'];
}
else
{
    echo "Session is not set.";
}
?>

<br><br>

<a href="page1.php">Back to Page 1</a>