<?php
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    try {
        $obj_pdo = new PDO("mysql:host=127.0.0.1;dbname=mybd", "root", "", $options);
        echo "connecting";
    } catch (PDOException $e) {
        die("ERROR: ". $e->getMessage());
    }