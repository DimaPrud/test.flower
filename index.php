<?php

include_once "header.php";
error_reporting(E_ALL);
ini_set ("display_errors", "on");
?>

            <header id="headname">
                <h1>Новости</h1>
            </header>
            <section class="news">
                <?php
                if (file_exists(__DIR__ . "/maneModel.php")) {
                    include __DIR__ . "/maneModel.php";
                } else {
                    echo "Fack";
                    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );

                }
                ?>
            </section>
            <footer class="navigation" id="manenavigation">

            </footer>
        </div>
    </body>
</html>


