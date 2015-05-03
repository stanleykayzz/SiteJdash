<?php
require_once('../scripts/class/MySession.php');
$session = new MySession();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jdash">
    <meta name="author" content="">
    <link rel="icon" href="ressources/favicon.ico">

    <title>Jdash web site</title>
      <link href="../css/bootstrap.min.css" rel="stylesheet" />
      <link href="../css/justified-nav.css" rel="stylesheet" />
      <link href="../css/connexion.css" rel="stylesheet" />
  </head>

  <body>

    <div class="container">
        <!-- CONNEXION BAAAAR -->
      <div class="masthead">
        <nav>
          <ul class="nav nav-justified">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="jdash.php">Jdash</a></li>
            <li><a href="inscription.php">S'inscrire</a></li>
            <li><a href="connexion.php">Se connecter</a></li>
            <li><a href="download.php">Downloads</a></li>
            <li class="active"><a href="plugin.php">Les plug-ins</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
        <!-- CONNEXION BAAAAR -->

      <!-- Jumbotron -->
      <div class="jumbotron" style="background-color : whitesmoke;" >



              <div class="row">
  <div class="col-sm-10">

      <form class="form-horizontal" role="form" method="post">

          <h2 style="margin-left:25%"><u><em>V&eacute;rification d'identit&eacute;</em></u></h2>
          <img src="../images/profil.jpg" class="img-rounded" style="margin-left:25%;"><br /><br />
                        <div class="form-group">
                            <label for="Pseudo" class="col-sm-3 control-label">Pseudo</label>
                            <div class="col-sm-9">
                                <input type="Pseud" class="form-control" id="Pseudo" placeholder="Pseudo" required="">
                            </div>
                        </div>
          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="Email1" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Mot de passe</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Saisissez votre mot de passe" required="">
                            </div>
                        </div>
          <div class="form-group">
                            <label for="inputcodeplugin" class="col-sm-3 control-label">Mot de passe</label>
                            <div class="col-sm-9">
                                <input type="codeplugin" class="form-control" id="codeplugin" placeholder="Saisissez votre � nouveau votre mot de passe" required="">
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="button" class="btn"><a href="adminPlugin.php">Valider</a></button>

                            </div>
                        </div>

                    </form>


					 </div>
  </div>
                </div>


                    </form>
      </div>



      

    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
