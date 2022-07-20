<?php
namespace Hello\BlogPhp\Controllers;
session_start();

use Hello\BlogPhp\Models\User;

class Authenticate
{
    public function index(){
        require "src/Views/login.php";
    }



    

    public function login(){
        
        if (isset($_POST['login'])) {

            $email = htmlspecialchars(trim($_POST['email']));
            $pw = htmlspecialchars($_POST['password']);
            $authUser = new User($email, $pw);
            $user = $authUser->getOneByEmail();
            $_SESSION['name'] = $user['first_name']." ".$user['last_name'];

            if ($user) {

                if (password_verify($pw, $user['password'])) {
                    if ($user['role'] === 'admin') {
                        header("location:/blog_php/AdminControl");
                    }elseif ($user['role'] === 'user') {
                        header("location:/blog_php/UserController");
                    }else{
                        header("location:/blog_php/Home");
                    }
                }else{
                    echo "mot de passe incorrect!";
                }
            }else{
                echo "email incorrect!";
            }
        }
    }


    public function register(){
        require_once "src/Views/signIn.php";
    }

    public function insert(){

        if (isset($_POST['submit'])) {
            if (!empty(htmlspecialchars(trim($_POST['fname']))) && !empty(htmlspecialchars(trim($_POST['lname']))) && !empty(htmlspecialchars(trim($_POST['pseudo']))) && !empty(htmlspecialchars(trim($_POST['email']))) && !empty(htmlspecialchars(trim($_POST['dateOfBirth'])))) {

                $user = new User($_POST['email'], $_POST['password'], $_POST['fname'], $_POST['lname'], $_POST['pseudo'],   $_POST['dateOfBirth']);
                $user->insertData(); 
                header("location:/blog_php/Authenticate/index");           
            }
        } else {
           
            echo "<div align='center'><h3>Remplissez correctement tous les champs</h3></div>";
           
        }

    }
}
