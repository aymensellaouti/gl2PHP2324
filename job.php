<?php 

    require_once('autoload.php');
    $repository = new JobRepository();
    $jobs = $repository->findAll();
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
            <th>Designation</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($jobs as $job): ?>
            <tr>
                <td><?=$job->designation?></td>
                <td>
                    <a href="detailsJob.php?id=<?=$job->id ?>">details</a>
                    <a href="deleteJob.php?id=<?=$job->id ?>">Delete</a>
                
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>