<?php



class connect
{
    public function __construct() {}

    public static function links()
    {
        $options = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $dns = 'mysql:host=185.20.224.67;dbname=news2;';
        $username = 'test';
        $password = 'test12345';

        return new PDO($dns, $username, $password, $options);
    }

}
$db = connect::links();

$db->query("SET NAMES 'utf8';");