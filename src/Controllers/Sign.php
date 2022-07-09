<?php

namespace Hello\BlogPhp\Controllers;

use Hello\BlogPhp\Models\Connexion;
use Hello\BlogPhp\Models\User;

class Sign
{
    public function index(){
        require_once "src/Views/signIn.php";
    }

    public function insert(){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        $user = new User($_POST['fname'], $_POST['lname'], $_POST['pseudo'], $_POST['email'], $_POST['password'], $_POST['dateOfBirth']);
        $user->insertData();

    }

}
