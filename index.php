<?php

    use Hello\BlogPhp\Controllers\UserController;

   require_once "./vendor/autoload.php";
   $home = new UserController();
   $home->homePage();

?>
