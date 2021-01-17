<?php
class Database {
    
    public static $options;
    public static $host;
    public static $dbName;
    public static $username;
    public static $password;
    public static $pdo;


    private static function connect() {
            $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName, self::$username, 
            self::$password, self::$options);
            try{
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo 'Connection fail: ' . $e->getMessage();
            }
            return $pdo;
    }

    public static function query($query, $params = array()) {
            $statement = self::connect()->prepare($query);
            $statement->execute($params);

            if (explode(' ', $query)[0] == 'SELECT') {
            $data = $statement->fetchAll();
            return $data;
            }
    }

}