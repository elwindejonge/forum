<?php
include('app/database.php');
session_start();

if (isset($_GET['topic_id']) && !empty($_GET['topic_id'])) {
    $topic_id = $_GET['topic_id'];
} elseif (isset($_POST['topic_id']) && !empty($_POST['topic_id'])) {
    $topic_id = $_POST['topic_id'];
} else {
    header('Location: series.php');
    exit(0);
}

if(connectToDatabase()) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['textarea']) && !empty($_POST['textarea']) && isset($_SESSION['id'])) {
        //Insert post
        $content = $_POST['textarea'];
        $user_id = $_SESSION['id'];

        executeDbStatement('INSERT INTO nieuwspanel.posts (content,user_id,topic_id) VALUES (?, ? , ?)', [$content, $user_id, $topic_id]);
    }


    executeDbStatement('SELECT posts.id AS id,
                               posts.name AS name,
                               posts.content AS content,
                               posts.created_at AS created_at,
                               posts.user_id AS user_id,
                               posts.topic_id AS topic_id,
                               topics.id,
                               topics.name AS topic_name,
                               users.id,
                               users.username AS username
                        FROM posts
                        INNER JOIN topics ON topics.id = posts.topic_id
                        INNER JOIN users ON users.id = posts.user_id
                        WHERE posts.topic_id = :topic_id',
        [
            ':topic_id' => $topic_id
        ]
    );

    $posts = fetchAllRecords();

//    if(empty($posts)) {
//        header('Location: series.php');
//        exit(0);
//    }
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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            height: 300
        });
    </script>

    <script>
        jQuery(document).ready(function () {
            $("#input-21f").rating({
                starCaptions: function(val) {
                    if (val < 3) {
                        return val;
                    } else {
                        return 'high';
                    }
                },
                starCaptionClasses: function(val) {
                    if (val < 3) {
                        return 'label label-danger';
                    } else {
                        return 'label label-success';
                    }
                },
                hoverOnClear: false
            });

            $('#rating-input').rating({
                min: 0,
                max: 5,
                step: 1,
                size: 'lg',
                showClear: false
            });

            $('#btn-rating-input').on('click', function() {
                $('#rating-input').rating('refresh', {
                    showClear:true,
                    disabled: !$('#rating-input').attr('disabled')
                });
            });


            $('.btn-danger').on('click', function() {
                $("#kartik").rating('destroy');
            });

            $('.btn-success').on('click', function() {
                $("#kartik").rating('create');
            });

            $('#rating-input').on('rating.change', function() {
                alert($('#rating-input').val());
            });


            $('.rb-rating').rating({'showCaption':true, 'stars':'3', 'min':'0', 'max':'3', 'step':'1', 'size':'xs', 'starCaptions': {0:'status:nix', 1:'status:wackelt', 2:'status:geht', 3:'status:laeuft'}});
        });
    </script>
</head>
<body>
<div class="container">
    <?= include ('templates/header.php'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" id="panels">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="panel-info text-center">
                            <h3><?= $posts[0]['topic_name']; ?></h3>
                                <?php
                                if(isset($posts[0]['topic_name'])) { ?>
                                <?php
                                }
                                ?>
                        </div>
                    </div>
                </div>

                <?php foreach($posts as $post): ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
<!--                            <img src="http://placehold.it/140x100">-->
                            <div class="panel-info">
                               <!-- <h3><?/*= $post['name']; */?></h3>-->
                                <p>
                                    <?= $post['content']; ?>
                                </p>
                                <p>
                                    <?= $post['created_at']; ?> - <?= $post['username']; ?>
                                </p>
                            </div>
                            <input id="input-21e" value="0" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="panel-info">
                            <h3>Reageer</h3>
                            <?php
                            if (!isset($_SESSION['username'])) { ?>
                                <p>Let op voor reageren dien je ingelogd te zijn!</p>
                            <?php } ?>
                            <p>

                            </p>
                            <?php if (isset($_SESSION['id'])) { ?>
                            <form action="posts.php" method="post">
                                <input type="hidden" name="topic_id" value="<?= $topic_id ?>">
                                <textarea id="mytextarea" name="textarea"></textarea>
                                <br/>
                                <input type="submit" class="btn btn-primary" value="Reageer">
                            </form>
                            <?php } ?>
<!--                            <a href="#">Reageer!</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/star-rating.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
</html>
