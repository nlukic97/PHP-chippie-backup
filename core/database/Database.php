<?php

namespace App\Core\Database;

class Database
{
    public static function connect($dbconfig)
    {
        try {
            return new \PDO(
                "mysql:dbname=" . $dbconfig['dbname'] . ";host=" . $dbconfig['host'],
                $dbconfig['username'],
                $dbconfig['password'],
                $dbconfig['options']
            );
        } catch (\PDOException $exception) {
            die('Could not connect. Error: ' . $exception->getMessage());
        }
    }
}


