<?php
    session_start();
    include_once "src/Views/includes/header.php";
    include_once "src/Views/includes/navbar/navAdmin.php";
    
    ?>
        <div class="d-inline-flex">
            <?php include_once "src/Views/includes/sidebar.php"; ?>
            <div align="center" class="mx-5">
                <h1>Welcome <?= $_SESSION['name']."..." ?></h1>
            </div>        
        </div>

    <?php
    include_once "src/Views/includes/footer.php";

?>