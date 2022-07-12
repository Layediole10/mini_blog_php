<?php

   require_once "./vendor/autoload.php";
// recuperation de l'url sous forme de tableau séparé par des slashs.
$url = explode("/",$_GET['paramUrl']);

if ($url[0]!="") {
    $controller = ucfirst($url[0]);
    
    //instanciation dynamique de la classe du controlleur
    $class =  'Hello\BlogPhp\Controllers\\'.$controller;
    $controller = new $class();
    
    //recuperation du 2e parametre s'il existe sinon on prend index.
    $action = isset($url[1])? $url[1]: "index";

    //appel de la methode s'il existe 
    if (method_exists($controller,$action)) {
        $controller->$action();

    }else{
        echo "Page Not found 404";
    }
}else{
    //si aucun parametre n'est defini, on appelle la page home
    $home = new  Hello\BlogPhp\Controllers\Home();
    $home->index();
}



?>
