<?php 

    if(isset($_GET['id'])) {
        $jobRepository = new JobRepository();
        $job = $jobRepository->findById($_GET['id']); 
        // Chercher dans la base le job d'id $_GET['id']
            require_once 'autoloader.php';
            
            // si job existe => afficher
            if (!$job) {
               header("Location:jobs.php");
               die(); 
            }
            // sinon redirection
             // Todos : 1 Connexion à la base 
            
            ?>
            
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Job Details </title>
            </head>
            <body>
                <table border="2">
                    <tr>
                        <th>id</th>
                        <th>designation</th>
                    </tr>
            
                        <tr>
                            <td><?=$job->id ?></td>
                            <td><?=$job->designation ?></td>
                        </tr>
            
                </table>
            </body>
            </html>
            <?php
    } else {

        header('Location:jobs.php');
    }