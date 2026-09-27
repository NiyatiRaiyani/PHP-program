<form method ="post">

    <input type="text" name="user" placeholder="Enter a Username">
    <br>
    </br>

    <button name="button" value="set"->Set Cookie </button>
    <br>
    </br>

    <button name="button" value="set"->Display Cookie </button>
    <br>
    </br>

    <button name="button" value="set"->Delete Cookie </button>
    <br>
    </br>

</form>

<?php

if (isset($_POST['button']))
{
    $button = $_POST['button'];

    // Set Cookie
    if ($button == "set")
    {
        $val = $_POST['user'];

        setcookie("user", $val, time() + 3600);

        echo "Cookie is set with value: " . $val;
    }

    // Display Cookie
    if ($button == "display")
    {
        if (isset($_COOKIE['user']))
        {
            echo "Cookie value: " . $_COOKIE['user'];
        }
        else
        {
            echo "Cookie is not set.";
        }
    }

    // Delete Cookie
    if ($button == "delete")
    {
        setcookie("user", "", time() - 3600);

        echo "Cookie deleted.";
    }
}
?>