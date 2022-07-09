<?php

namespace Hello\BlogPhp\Controllers;

use Hello\BlogPhp\Models\Connexion;
use Hello\BlogPhp\Models\User;

class Home
{
    public function index(){
        Connexion::dbConnect();
        $user1 = new User('layediole@gmail.com', 'pass', 'abdoulaye', 'diole');
        require_once "src/Views/homePage.php";
    }
}
