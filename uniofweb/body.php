<?php
error_reporting(E_ALL);
ini_set ("display_errors", "on");

if (file_exists(__DIR__ . "/header.php")) {
    include __DIR__ . "/header.php";
} else {
    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );
}
?>


<section>

</section>

<?php
error_reporting(E_ALL);
ini_set ("display_errors", "on");

if (file_exists(__DIR__ . "/footer.php")) {
    include __DIR__ . "/footer.php";
} else {
    throw new Exception('File not found ' . ((int)__LINE__ - 3) . ' ' . __FILE__ );
}
?>