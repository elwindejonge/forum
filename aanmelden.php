<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TV forum | Aanmelden</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <?= include ('templates/header.php'); ?>

<div class="aanmelden">
    <div class="container" style="margin-top:30px">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <h1>Aanmelden</h1>
                    </h3>
                </div>
                <div class="panel-body">
                    <form name="registration" method="post" action="registration.php" role="form">
                        <div class="row">
                            <div class="col-xs-12">
                        <div class="form-group">
                            <h4>Gebruikersnaam *</h4>
                            <input type="text" name="name" value="" id="display_name" class="form-control " placeholder="Gebruikersnaam" tabindex="3">
                        </div>
                        <div class="form-group">
                            <h4>E-mailadres *</h4>
                            <input type="text" name="email" value="" id="email" class="form-control " placeholder="E-mailadres" tabindex="4">
                        </div>
                                <div class="form-group">
                                    <h4>Wachtwoord *</h4>
                                    <input type="password" name="password" value="" id="password" class="form-control " placeholder="Wachtwoord" tabindex="5">
                                </div>
                                <div class="form-group">
                                    <h4>Herhaal wachtwoord *</h4>
                                    <input type="password" name="password" value="" id="password" class="form-control " placeholder="Herhaal wachtwoord" tabindex="5">
                                </div>
                        <button type="submit" name="submit" value="submit" class="btn btn-default navbar-btn">Aanmelden</button>

                        <hr style="margin-top:10px;margin-bottom:10px;" >

                        <div class="form-group">

                            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Wachtwoord vergeten?</a></div>

                        </div>
                    </form>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

</body>
</html>
