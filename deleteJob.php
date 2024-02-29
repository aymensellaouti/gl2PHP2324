<?php
    
    if (!isset($_GET['id'])) {
        header('Location:jobs.php');
    } else {

    $id = $_GET['id'];

    
    require_once 'autoload.php';

    $bd = ConnexionBD::getInstance();

    $req = "DELETE FROM job WHERE `job`.`id` = ? ";
    $response = $bd->prepare($req);
    $response->execute([$id]);
        header('Location:jobs.php');
    }