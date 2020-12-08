<?php
    // DB
        require("../config/db.php");

    // Variables
        $name = strip_tags(trim($_POST["name"]));
        $surename = strip_tags(trim($_POST["surename"]));
        $status = strip_tags(trim($_POST["status"]));
        $residence = strip_tags(trim($_POST["residence"]));
        $frequent_visit = strip_tags(trim($_POST["frequent_visit"]));
        
    // Validation will on JS and PHP
        if($name == "" || $surename == "" || $status == "default" || $residence == "" || $frequent_visit == "") {
            header("Location: ../index.php");
            exit();
        }

        if($name < 2 || $surename < 3 || $residence < 3 || $frequent_visit < 3) {
            header("Location: ../index.php");
            exit();
        }


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
        