<?php

class Singleton {
private static $instances = [];
protected $host;
private function __construct() { }

private function __clone() { }

public function __wakeup()
{
throw new \Exception("Cannot unserialize a singleton.");
}

public static function getInstance(): Singleton
{
$cls = static::class;
if (!isset(self::$instances[$cls])) {
self::$instances[$cls] = new static();
}
return self::$instances[$cls];
}

public static function links(): bool|mysqli|null
{
    $host = '185.20.224.67';
    $user = 'test';
    $pass = 'test12345';
    $db_name = 'news2';
return mysqli_connect($host, $user, $pass, $db_name);
}
}

$link = Singleton::links();