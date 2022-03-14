<?php
error_reporting(E_ALL);
ini_set ("display_errors", "on");

if (file_exists(__DIR__ . "/header.php")) {
    include __DIR__ . "/header.php";
} else {
    echo "Fack";
    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );
}


echo 'Hi';

?>
<script>
    console.log("hi");
</script>
</div>
</body>
</html>

<?php

echo "hi";

/*
 Немного полезных команд Docker:

    docker image = Показывает образы докера

    docker run id_нужного_образа = запускает контейнер от нужного образа

    docker ps = показывает запущенные контейнеры

    docker ps -a = показывает все контейнеры

    docker attach id_нужного_контейнера = вход в процесс в контейнере

    docker logs id_нужного_контейнера = история процессов в выбранном контейнере

    docker rm id_нужного_контейнера = удаляет выбранный контейнер

    docker rmi id_нужного_образа = удаляет выбранный образ

    prune = добавление этой команды вместо id_нужного_контейнера и id_нужного_образа в 2 командах
выше удаляет все образы или контейнеры

    docker push id_нужного_образа = пушит образ на докерхаб



*/