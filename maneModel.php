<?php

error_reporting(E_ALL);
ini_set ("display_errors", "on");

include "connect.php";
include "count.php";
include "404.php";

$url = $_SERVER['REQUEST_URI'];

if(!empty($_GET['page'])) {
    $page = $_GET['page'];
    if($page === "1") {
        // Переход на первую страницу
        header("Location:/news.php");
    }
} else {
    $page = 1;
}

if(!is_numeric($page)) {
    // если страница не номер
    notFound();
} else if (is_numeric($page) && $page < 1) {
    // если страница меньше 1
    notFound();
} else if ($str_num < $page) {
    // если страница больше кол-ва страниц
    notFound();
}

$limit_min = ($page - 1) * 5;
$limit_max = 5;

include "footerNav.php";
?>
    <style>
        .action, .action a:-webkit-any-link {
            background-color: #9a2373;
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
            <p class='nameNews'><a href='http://test.flower-bottle.ru/view.php?id=" . $conclusion["id"] . "'>"
        . $conclusion["title"] . "</a></p></div>
        <p class='minitext'>" . $conclusion["announce"] . "</p>";

    }

} else {
    throw new Exception('Нихрена не найдено');
    header('HTTP/1.1 404 Not Found');
    echo 'Страница не найдена';
    exit();
}