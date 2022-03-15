<?php

error_reporting(E_ALL);
ini_set ("display_errors", "on");

include "connect.php";
include "count.php";
include "404.php";


$id = $_GET['id'];
if(!is_numeric($id)) {
    // если номер новости не число
    notFound();
} else if (is_numeric($id) && $id < 1) {
    // если номер новости меньше 1
    notFound();
} else if ($id > $count_num) {
    //если номер новости больше количества новостей
    notFound();
} else if (empty($id)) {
    //если не указан номер новости
    notFound();
}


$sql = "SELECT * FROM news WHERE id = $id";
$pdo = $db->query($sql, PDO::PARAM_STR_CHAR);

if ($result = $pdo) {
    foreach ($pdo as $conclusion) {
        echo "<p class='title'><i>" . $conclusion["title"] . "</i></p><p class='contentnews'>" . $conclusion["content"] . "</p>";
    }
} else {
    echo "Не работает";
}