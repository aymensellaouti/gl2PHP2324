<?php
    
    if (!isset($_GET['id'])) {
        header('Location:jobs.php');
    } else {

    $id = $_GET['id'];

    
    require_once 'autoload.php';

    $jobRepository = new Repository();
    $job = $jobRepository->findById($id);

    if ($job) {
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
        <th>
            id
        </th>
        <th>
            designation
        </th>

        <tr>
            <td><?=$job->id ?></td>
            <td><?=$job->designation ?></td>
        </tr>

    </table>
</body>
</html>
<?php } else {
    header('Location:jobs.php');
    }
} ?>