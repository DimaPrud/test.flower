<?php
$i = 1;
/** @var $str_num */
while ($i<=$str_num) {
    if ($i === 1) {
        echo "<p class='click ";
        if($i == $page) {
            echo 'action';
        }
        echo "'><a href='http://test.flower-bottle.ru/news.php'>" . $i . "</a></p>" . " ";
    } else {
        echo "<p class='click ";
        if($i == $page) {
            echo 'action';
        }
        echo "'><a href='http://test.flower-bottle.ru/news.php?page=" . "$i" . "'>" . $i . "</a></p>" . " ";
    }
    $i++;
}