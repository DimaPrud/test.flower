<?php

function notFound() {
    header('HTTP/1.1 404 Not Found');
    echo 'Страница не найдена';
    exit();
}