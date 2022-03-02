<?php

error_reporting(E_ALL);
ini_set ("display_errors", "on");

//include "connect.php";
$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$db = new PDO('mysql:host=185.20.224.67;dbname=news2;', 'test', 'test12345', $options);
$db->query("SET NAMES 'utf8';");

//

$sql = "SELECT COUNT(`id`) AS `count` FROM `news`";
$count = $db->query($sql, PDO::PARAM_STR_CHAR);
$count_news = $count->fetch();
$count_num = $count_news['count'];
$str_num = ceil($count_num / 5);

//

$i = 1;
$limit_max = 5;
$limit_min = 0;
while ($i<=$str_num) {
    echo "<p class='click'><a href='http://test.flower-bottle.ru/index.php/id" . "$limit_min-$limit_max" . "'>" . $i . "</a></p>" . " ";
    $i++;
    $limit_max = $limit_max + 5;
    $limit_min = $limit_min + 5;
}






//    $sql = "SELECT * FROM `news` ORDER BY `idate` DESC LIMIT $limit_min, $limit_max";
//    $pdo = $db->query($sql, PDO::PARAM_STR_CHAR);
//
//    if ($result = $pdo) {
//
//        foreach ($pdo as $conclusion) {
//            echo "<p class='date'>" . date('d.m.Y', $conclusion["idate"]) . "<br />" . "</p>" .
//                "<h3>" . "<a href='http://test.flower-bottle.ru/news.php/id" . $conclusion["id"] . "'>"
//                . $conclusion["title"] . "</a>" . "</h3>"
//                . "<p class='minitext'>" . $conclusion["announce"] . "</p>";
//        }
//    }