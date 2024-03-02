<?php 
    require_once 'autoloader.php';
    $jobRepository = new JobRepository();
    $jobs = $jobRepository->findAll(); 
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
            <th>designation</th>
            <th>actions</th>
        </tr>

        <?php foreach($jobs as $job): ?>
            <tr>
                <td><?=$job->designation ?></td>
                <td><a href="detailsJob.php?id=<?=$job->id?>">details</a></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>