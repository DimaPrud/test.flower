<?php

error_reporting(E_ALL);
ini_set ("display_errors", "on");

include "footerNav.php";

//$host = '185.20.224.67';
//$user = 'test';
//$pass = 'test12345';
//$db_name = 'news2';
//$dns = "mysql:host=$pass;dbname=$db_name;";

//
$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

//$db = mysqli_connect($host, $user, $pass, $db_name);
//$db = mysqli_connect($host, $user, $pass, $db_name);
$db = new PDO('mysql:host=185.20.224.67;dbname=news2;', 'test', 'test12345', $options);

//mysqli_query($db,"SET NAMES 'utf8';");
$db->query("SET NAMES 'utf8';");
//

$url = $_SERVER['REQUEST_URI'];
$page = str_replace("/index.php?page=", "", $url);
$limit_min = ($page - 1) * 5;
$limit_max = 5;
?>
    <style>
        .footerClick #a<?= $page?>{
            background-color: #9a2373;
        }
        .footerClick #a<?= $page?> a:-webkit-any-link {
            color: #FFFFFF;
        }
    </style>
<?php
//
$sql = "SELECT * FROM `news` ORDER BY `idate` DESC LIMIT $limit_min, $limit_max";
//
$pdo = $db->query($sql, PDO::PARAM_STR_CHAR);

if ($result = $pdo) {
    foreach ($pdo as $conclusion) {
        echo "<div class='hNews'><p class='date'>" . date('d.m.Y', $conclusion["idate"]) . "</p>
            <p class='nameNews'><a href='http://test.flower-bottle.ru/news.php?id=" . $conclusion["id"] . "'>"
        . $conclusion["title"] . "</a></p></div>
        <p class='minitext'>" . $conclusion["announce"] . "</p>";

    }

} else {
    // @TODO add exception
    echo "Не работает";
}