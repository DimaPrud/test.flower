<?php
error_reporting(E_ALL);
ini_set ("display_errors", "on");

if (file_exists(__DIR__ . "/header.php")) {
    include __DIR__ . "/header.php";
} else {
    echo "Fack";
    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );
}
?>

            <header id="headname">
                <p class="title" id="mainTitle">Новости</p>
            </header>
            <section class="newss">
                <div class="bodys">
                <?php
                if (file_exists(__DIR__ . "/maneModel.php")) {
                    include __DIR__ . "/maneModel.php";
                } else {
                    echo "Fack";
                    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );

                }
                ?>
                </div>
            </section>
            <footer class="navigation" id="manenavigation">
                <h3 class="footerH">Страницы:</h3>
                <div class="footerClick">
                <?php
                if (file_exists(__DIR__ . "/footerNav.php")) {
                    include __DIR__ . "/footerNav.php";
                } else {
                    echo "Fack";
                    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );

                }
                ?>

                </div>
            </footer>
        </div>
    </body>
</html>


