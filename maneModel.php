<?php

error_reporting(E_ALL);
ini_set ("display_errors", "on");

//include "connect.php";
$host = '185.20.224.67';
$user = 'test';
$pass = 'test12345';
$db_name = 'news2';
$link = mysqli_connect($host, $user, $pass, $db_name);
$sql = "SELECT * FROM news";




if ($result = mysqli_query($link /*?? false*/, $sql)) {

    foreach ($result as $conclusion) {
        echo $conclusion["title"] . "<br />" .
            $conclusion["idate"] . "<br />" . $conclusion["announce"] . "<br />";

        echo '<hr />';
    }
} else {
    echo "Не работает";
}