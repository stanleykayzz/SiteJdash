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

    <title>Plugins Jdash</title>

      <link href="../css/plugin.css" rel="stylesheet" />
      <link href="../css/justified-nav.css" rel="stylesheet" />
      <link href="../css/bootstrap.min.css" rel="stylesheet" />

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
      <div class="jumbotron" style="background-color:whitesmoke;">
          <div class="input-group">
  <input type="text" list="categ1" name="recherche" class="form-control" placeholder="Cat&eacute;gorie , nomDePlugin, ..." aria-describedby="basic-addon2" id="recherche">
  <span class="input-group-addon" id="Span1">Recherche</span>
              <datalist id=categ1 >
                 <option> Jeux </option>
                 <option> Outils</option>
                 <option> Livre   </option>
                 <option> Alimentation </option>
                 <option>Voyage </option>
                 <option>Photo </option>
                 <option>Education</option>
              </datalist>
</div>

           <br /><br />
           <div id="results">Result<br/></div>
            <button class="btn btn-primary" type="button"><a href="addPlugin.php">Ajouter vos plug-ins</a></button>
            <button class="btn btn-primary" type="button"><a href="adminPlugin.php">Modifier vos plug-ins</a></button>

      </div>


    

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

  </body>
  <footer>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
  </footer>
</html>
