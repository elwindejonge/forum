<?php
session_start();
include "../app/database.php";

if(connectToDatabase()) {


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['subject']) && !empty($_POST['subject'])) {
    //Insert post
    $name = $_POST['subject'];
    $medium_content = $_POST['headline'];
    $long_content = $_POST['newsmessage'];

    executeDbStatement('INSERT INTO nieuwspanel.nieuws (name,medium_content,long_content) VALUES (?, ?, ?)', [$name, $medium_content, $long_content]);
}
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TV forum | Home</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<ul class="nav nav-tabs">
    <li role="presentation"><a href="panel.php">Upload nieuws</a></li>
    <li role="presentation"><a href="editforum.php">Edit Forum</a></li>
</ul>

<div class="container">
<form method="POST">
    <div style="margin-top:10px;" class="panel panel-default">
        <div class="panel-heading">Onderwerp</div>
        <div class="panel-body">
           <input style="height: 20px;" class="well" type="text" placeholder="Onderwerp" name="subject"/>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Headline</h3>
        </div>
        <div class="panel-body">
           <textarea name="headline" class="well" placeholder="Plaats hier de headline" rows="4" cols="50"></textarea>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Nieuwsbericht</h3>
        </div>
        <div class="panel-body">
            <textarea name="newsmessage" class="well" placeholder="Plaats hier het nieuwsbericht" rows="4" cols="50"></textarea>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Image</h3>
        </div>
        <div class="panel-body">
                <input type="file">
        </div>
    </div>

    <input class="btn btn-primary" type="submit" name="submit" value="Upload!"/></br>
</form>

</div>
</body>
</html>
