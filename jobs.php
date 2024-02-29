<?php
    require_once 'autoload.php';
    $jobRepository = new Repository();
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
        <th>
            designation
        </th>
        <th>
            Actions
        </th>
        <?php foreach($jobs as $job): ?>
        <tr>
            <td><?=$job->designation ?></td>
            <td>
                <a href="detailJob.php?id=<?=$job->id ?>">détails</a>
                <a href="deleteJob.php?id=<?=$job->id ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>