<?php

namespace Hello\BlogPhp\Models;

abstract class Model
{
    protected \PDO $pdo;
    protected $table;

    public function dbConnect(){
        $this->pdo = Connexion::dbConnect();

    }
}
