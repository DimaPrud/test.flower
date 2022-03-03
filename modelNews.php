<?php

error_reporting(E_ALL);
ini_set ("display_errors", "on");

//include "connect.php";

//$host = '185.20.224.67';
//$user = 'test';
//$pass = 'test12345';
//$db_name = 'news2';

$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

$db = new PDO('mysql:host=185.20.224.67;dbname=news2;', 'test', 'test12345', $options);

//$db = new PDO('185.20.224.67', 'test', 'test12345', 'news2');

$db->query("SET NAMES 'utf8';");
$url = $_SERVER['REQUEST_URI'];
$id = substr($url, 13);


$sql = "SELECT * FROM news WHERE id = $id";
$pdo = $db->query($sql, PDO::PARAM_STR_CHAR);

if ($result = $pdo) {
    foreach ($pdo as $conclusion) {
        echo "<p class='title'><i>" . $conclusion["title"] . "</i></p><p class='contentnews'>" . $conclusion["content"] . "</p>";
    }
} else {
    echo "Не работает";
}