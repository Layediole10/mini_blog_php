<?php
session_start();
    include_once "src/Views/includes/header.php";
    include_once "src/Views/includes/navbar/navUser.php";
    ?>
        <div align="center">
            <h1>Welcome <?= $_SESSION['name']."..." ?></h1>
        </div>
    <?php
    include_once "src/Views/includes/footer.php";

?>