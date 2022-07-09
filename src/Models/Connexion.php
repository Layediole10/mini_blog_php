<?php

namespace Hello\BlogPhp\Models;

class Connexion
{
   
    public static function dbConnect(){
        try {
           // echo "connected...";
           return new \PDO("mysql:host=127.0.0.1;dbname=myblog; charset=utf8", "root", "");
           
        } catch (\PDOException $e) {
           die("ERROR: ".$e->getMessage());
        }
   }
}
