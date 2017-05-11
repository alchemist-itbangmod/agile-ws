<?php
require 'vendor/autoload.php';

final class DbConnection {

  public static function getConnection () {
    $driver = 'mysqli';
    $server = 'http://54.251.138.92/';
    $user = 'root';
    $password = '1qaz2wsx';
    $database = 'agile-php';

    $db = ADONewConnection($driver);
    $db->debug = false;
    $db->Connect($server, $user, $password, $database);
    return $db;
  }
}
