<?php

namespace Hello\BlogPhp\Controllers;

class UserController
{

    public function index(){
        require_once "src/Views/userHome.php";
    }

}
