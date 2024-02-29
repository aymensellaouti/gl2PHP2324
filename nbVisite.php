<?php 
session_start();
setcookie("test","aymen", time() + 3600);
// Fama compteur fel hkaya 

if (isset($_SESSION['nbVisite'])) {
    $nbVisite = $_SESSION['nbVisite'] + 1;
    $message = "Merci pour votre fidélité c'est votre $nbVisite visite :)";
    $_SESSION['nbVisite'] = $nbVisite;
} else {
    $message = 'Bienvenu :D $$$$';
    $_SESSION['nbVisite'] = 1;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nb Visite</title>
</head>
<body>
    <h1><?= $message ?></h1>
</body>
</html>