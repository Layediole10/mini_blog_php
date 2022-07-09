<?php

   require_once "./vendor/autoload.php";
// On sépare l'url sous form de sous chaine dans un tableau
$params = explode("/",$_GET['p']);

if ($params[0]!="") {
    $controller = ucfirst($params[0]);
    
    //Création dynamique de classes du controlleur
    $class =  'Hello\BlogPhp\Controllers\\'.$controller;
    $controller = new $class();
    
    /*  Si le 2ème parametre du tableau (url) est défini, on l'appel au niveau du controller, sinon on applique la methode index du controlleur */
    $action = isset($params[1])? $params[1]: "index";

    //action via la methode 
    if (method_exists($controller,$action)) {
        $controller->$action();
    }else{
        echo "Page Not found 404";
    }
}else{
    $home = new  Hello\BlogPhp\Controllers\Home();
    $home->index();
}



?>
