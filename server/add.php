<?php
    // DB
        require("../config/db.php");

    // Variables
        $name = strip_tags(trim($_POST["name"]));
        $surename = strip_tags(trim($_POST["surename"]));
        $status = strip_tags(trim($_POST["status"]));
        $residence = strip_tags(trim($_POST["residence"]));
        $frequent_visit = strip_tags(trim($_POST["frequent_visit"]));
        
    // Validation will on JS

    // SQL
        $sql = "INSERT INTO `users` (`name`, `surename`, `status`, `residence`, `frequentVisit`) VALUES (:name, :surename, :status, :residence, :frequentVisit)";
        $query = $pdo->prepare($sql);
        $query->execute([
            "name" => $name,
            "surename" => $surename,
            "status" => $status,
            "residence" => $residence,
            "frequentVisit" => $frequent_visit,
        ]);

    // Location
        header("Location: ../index.php");
        