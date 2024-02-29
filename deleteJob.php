<?php 
    
    if (!isset($_GET['id'])) {
        header('Location:job.php');
    } else {
    $id = $_GET['id'];

    require_once('autoload.php');
    $db = ConnexionBD::getInstance();
    $query = "DELETE FROM job WHERE `job`.`id` = ?";
    $ps = $db->prepare($query);
    //exécute la requete
    $ps->execute([$id]);
    }
    header('Location:job.php');