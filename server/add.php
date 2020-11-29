<?php
    // DB
        require("../config/db.php");

    // Variables
        $name = strip_tags(trim($_POST["name"]));
        $surename = strip_tags(trim($_POST["surename"]));
        $status = strip_tags(trim($_POST["status"]));
        $residence = strip_tags(trim($_POST["residence"]));
        
    // Validation will on JS

    // SQL
        $sql = "INSERT INTO `users` (`name`, `surename`, `status`, `residence`) VALUES (:name, :surename, :status, :residence)";
        $query = $pdo->prepare($sql);
        $query->execute([
            "name" => $name,
            "surename" => $surename,
            "status" => $status,
            "residence" => $residence,
        ]);

    // Location
        header("Location: ../index.php");
        