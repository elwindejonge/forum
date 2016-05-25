<?php
session_start();

include('app/database.php');

if(connectToDatabase()) {
    executeDbStatement('SELECT * FROM nieuws ORDER BY created_at DESC');

    $nieuws = fetchAllRecords();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TV forum | Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<div class="container">
    <?= include ('templates/header.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Het laatste nieuws:</h1></div>
                    <div class="panel-body">
                        <?php foreach($nieuws as $item): ?>
                        <button type="button" class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">
                                        <div class="nieuws-foto">
                                            <img src="<?= $item['image']; ?>" height="150" width="150">
                                        </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="nieuws-titel" id="test1">
                                        <h2><?= $item['name']; ?></h2>
                                        <div class="nieuws-tekst">
                                            <?= $item['medium_content']; ?>
                                        </div>
                                        <a href="http://localhost/forumgoed/nieuws.php?topic_id=<?= $item['id']; ?>"><i><b>Lees meer...</b></i></a>
                                    </div>
                                </div>
                                <div class="col-md-3" id="test">
                                    <h3>Geplaatst op:</h3>
                                    <div class="datum">
                                        <p><h4><?= $item['created_at']; ?></h4></p>
                                    </div>
                                </div>
                                </div>
                            </button>
                            <?php endforeach; ?>
                                </div>
                            </div>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--EIND PANELS-->
    </div> <!--EIND CONTAINER-->


        <?php
        if (isset($_SESSION['username'])) { ?>
        <div id="aanmelden-succes">
            <div class="alert alert-success fade in" role="alert">
                <strong>Succesvol ingelogd!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>
        <?php } ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
