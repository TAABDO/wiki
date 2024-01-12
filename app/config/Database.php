<?php
namespace Myapp\config;

require __DIR__."/../../vendor/autoload.php";



use PDO;
use PDOException;
use Exception;

class Database{

private static $conn;

public static function connect(){


    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
    $dotenv->load();

        try {
            $dsn = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}";
            self::$conn = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
        } catch (PDOException $e) {
            throw new Exception('Connection failed: '.$e->getMessage());
        }

    return self::$conn;
    }

}




