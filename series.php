<?php
 session_start();

 include('app/database.php');

if(connectToDatabase()) {
    executeDbStatement('SELECT * FROM topics ORDER BY created_at DESC');

    $topics = fetchAllRecords();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TV forum | TV Series</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<div class="container">
<?= include ('templates/header.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" id="panels">
                <?php foreach($topics as $topic): ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="http://placehold.it/140x100">
                            <div class="panel-info">
                                <h3><a href="http://localhost/forumgoed/posts.php?topic_id=<?= $topic['id']; ?>"><?= $topic['name']; ?></a></h3>
                                <p>
                                    <?= $topic['content']; ?>
                                </p>
                                <p>
                                    <?= $topic['created_at']; ?>- aantal posts
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>