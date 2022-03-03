<?php

include_once "header.php";
error_reporting(E_ALL);
ini_set ("display_errors", "on");
?>

            <section class="news">
                <div class="body">
                <?php
                if (file_exists(__DIR__ . "/modelNews.php")) {
                    include __DIR__ . "/modelNews.php";
                } else {
                    echo "Fack";
                    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );

                }
                ?>
                </div>
            </section>
            <footer class="navigation">
                <a href="http://test.flower-bottle.ru/index.php?page=1">Все новости >></a>
            </footer>
        </div>
    </body>
</html>