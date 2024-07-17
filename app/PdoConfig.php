<?php

namespace app;
class PdoConfig
{
     const CONFIG = [
        'host' => 'localhost',
        'dbname' => 'forberries',
        'user' => 'root',
        'password' => '',
        'port' => '3306'
    ];
    public static function setup(){

        try{
            $pdo = new \PDO("mysql:host=" . self::CONFIG['host'] . ";dbname=" . self::CONFIG['dbname'] . ";port:" . self::CONFIG['port'],
                self::CONFIG['user'],
                self::CONFIG['password']);

        }catch (\PDOException $e){
                echo $e->getMessage();
        }
        return $pdo;
    }
}