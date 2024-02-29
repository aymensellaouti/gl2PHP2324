<?php 
    
    require_once('autoload.php');
    
    if (!isset($_GET['id'])) {
        header('Location:job.php');
    } else {
    $id = $_GET['id'];

   
    $repository = new JobRepository();
    // transforme la valeur de retour 
    // en quelque chose de lisible
    $job = $repository->findById($id);
    if (!$job) {
        header('Location:job.php');
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>id</th>
            <th>Designation</th>

        </tr>

            <tr>
                <td><?=$job->id?></td>
                <td><?=$job->designation?></td>

            </tr>
    </table>
    
</body>
</html>
<?php } }?>