<?php

namespace Hello\BlogPhp\Controllers;

use Hello\BlogPhp\Models\Connexion;


class Home
{
    public function index(){
       
        require_once "src/Views/homePage.php";
    }
}
