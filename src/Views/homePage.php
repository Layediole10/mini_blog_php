<?php
    include_once "src/Views/includes/header.php";
    include_once "src/Views/includes/navbar.php";
   echo "<h1>Welcome </h1><h2>".$user1->getFname()."</h2> <h2>".$user1->getLname()."</h2>";
    include_once "src/Views/includes/footer.php";

?>