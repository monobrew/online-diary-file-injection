<?php

if (!defined('IN_INDEX')) { exit("This file can only be included in index.php."); }

class DB {
    private static $dbh = null; 

    public static function getInstance(): PDO {

        if (!self::$dbh) {
            try {
                self::$dbh = new PDO(
                    'pgsql:host=' . CONFIG['db_host'] . ';dbname=' . CONFIG['db_name'],
                    CONFIG['db_user'],
                    CONFIG['db_password']
                );
                self::$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                exit("Cannot connect to the database: " . $e->getMessage());
            }
        }
        return self::$dbh;
    }
}
