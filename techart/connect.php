<?php



class connect
{
    protected static $options = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    protected static $dns = 'mysql:host=185.20.224.67;dbname=news2;';
    protected static $username = 'test';
    protected static $password = 'test12345';

//    public function __construct($options, $dns, $username, $password) {
//        $this->options = $options;
//        $this->dns = $dns;
//        $this->username = $username;
//        $this->password = $password;
//    }

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