<?php

class Controller extends Database{

    public static $host = "localhost";
    public static $dbName = "pokeris";
    public static $username = "root";
    public static $password = "";
    public static  $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false
    ];
    public static $pdo = null;

    public static function CreateView($viewName){

        require_once("./Views/$viewName.php");
    
    }
}
?>