<?php

$sql = "SELECT COUNT(`id`) AS `count` FROM `news`";
$count = $db->query($sql, PDO::PARAM_STR_CHAR);
$count_news = $count->fetch();
$count_num = $count_news['count'];
$str_num = ceil($count_num / 5);

