<?php

error_reporting(E_ALL);
ini_set ("display_errors", "on");

if (file_exists(__DIR__ . "/header.php")) {
    include __DIR__ . "/header.php";
} else {
    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );

}
?>

            <section class="news">
                <div class="body">
                <?php
                if (file_exists(__DIR__ . "/modelNews.php")) {
                    include __DIR__ . "/modelNews.php";
                } else {
                    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );

                }
                ?>
                </div>
            </section>
            <footer class="navigation">
                <a href="http://test.flower-bottle.ru/techart/news.php">Все новости >></a>
            </footer>
        </div>
    </body>
</html>