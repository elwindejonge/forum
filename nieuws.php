<?php
session_start();

include('app/database.php');

if(connectToDatabase()) {
    executeDbStatement('SELECT * FROM nieuws ORDER BY created_at DESC');

    $nieuws = fetchAllRecords();

}
//    echo "<pre>";
//    print_r($nieuws);
//    echo "</pre>";
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
                    <?php foreach ($nieuws as $id => $nieuws_item) {
                        if ($nieuws_item['id'] == $_GET['topic_id']) { ?>
                            <div class="panel-heading"><h1><?= $nieuws_item['name']; ?></h1></div>
                            <div class="panel-body">
                                <button type="button" class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="nieuws-foto">
                                                <img src="<?= $nieuws_item['image']; ?>" height="150" width="150">
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="nieuws-titel" id="test1">
                                                <div class="nieuws-tekst">
                                                    <?= $nieuws_item['long_content']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="index.php"><i><b>Ga terug...</b></i></a>
                                </button>
                            </div>

                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!--EIND PANELS-->
</div> <!--EIND CONTAINER-->
</body>
</html>
