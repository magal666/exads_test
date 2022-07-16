<?php

namespace App\Util;

use PDO;

class Database
{

    /** @var PDO $instance */
    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {

        if(!isset(self::$instance)){

            $host = 'localhost';
            $name = 'exads';
            $user = 'root';
            $pass = '';
            $port = '3308';


            self::$instance = new PDO("mysql:host={$host};port={$port};dbname={$name}",$user,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        }

        return self::$instance;
    }

}
