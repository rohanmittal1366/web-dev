<?php

    $hostName = "localhost";
    $userName = "alan";
    $password = "alan";
    $port = "3306";
    $dbName = "misc";

    try {
        $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=course', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>