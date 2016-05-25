<div class="container">
    <div class="navbar navbar-inverse navbar-fixed-top"> <!--NAVBAR-->
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Serie Forum</a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navHeaderCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="effect"><a href="index.php">Home/Nieuws</a></li>
                    <li class="effect"><a href="series.php">TV series</a></li>
                    <?php
                    if (!isset($_SESSION['username'])) { ?>
                    <li class="effect"><a href="aanmelden.php">Aanmelden</a></li>
                    <li class="effect"><a href="login.php">Inloggen</a></li>
                    <?php } ?>

                    <?php
                    if (isset($_SESSION['username'])) { ?>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Welkom, <?php print_r($_SESSION['username']); ?> <span class="caret"></span>
                            </a>
                            <ul style="margin-left: auto; margin-right: auto;" class="dropdown-menu">
                                <a href="#">Profiel</a><br>
                                <a href="#">Berichten (0)</a><br>
                                <a href="./logout.php">Uitloggen</a><br>
                            </ul>
                        </li>
                    <?php } ?>

                    <?php
                    if (isset($_SESSION['username'])) { ?>
                        <li class="effect"><a href="logout.php">Log uit</a> </li>
                    <?php } ?>
                </ul> <!--EINDE NAVBAR-->
            </div>
        </div>
    </div>
</div>