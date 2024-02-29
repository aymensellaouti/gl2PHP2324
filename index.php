<?php

$name = "aymen";
$message = "Hello $name";
$stats = count_chars($message, 1);
//unset($message);
//var_dump($_SERVER);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $message ?></h1>


    <table border="2">
        <tr>
            <th>Caractères</th>
            <th>Nombre d'occurences</th>
        </tr>
        <?php foreach ($stats as $caracter => $occurence) : ?>
            <tr>
                <td><?= chr($caracter) ?></td>
                <td><?= $occurence ?></td>
            </tr>
        <?php endforeach ?>
    </table>



</body>

</html>