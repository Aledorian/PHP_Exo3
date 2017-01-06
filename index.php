<?php
// $coord = array('prenom' => 'Aledorian', 'nom' => 'Legrand', 'tel' => '07/70/45/56/05', 'mail' => 'aledorianlegrand@gmail.com', 'portfolio' => 'http://yamete.com', 'twitter' => '/Aledorian', 'git' => '/Aledorian', 'facebook' => '/dossierland');

$user = isset($_GET['user']) ? $_GET['user'] : '';

switch ($user) {
  case 'Aledorian':
    $coord = array('prenom' => 'Aledorian', 'nom' => 'Legrand', 'tel' => '07/70/45/56/05', 'mail' => 'aledorianlegrand@gmail.com', 'portfolio' => 'http://yamete.com', 'twitter' => '/Aledorian', 'git' => '/Aledorian', 'facebook' => '/dossierland');
    break;
  case 'Elizra':
    $coord = array('prenom' => 'Elizra', 'nom' => 'Uranos', 'tel' => '07/**/**/**/**', 'mail' => 'jenexistepas@gmail.com', 'portfolio' => 'http://nanii.com', 'twitter' => '/fakegirl', 'git' => '/fakegirl', 'facebook' => '/fakegirl');
    break;
  case 'Alastasia':
    $coord = array('prenom' => 'Alastasia', 'nom' => 'Poklonskaya', 'tel' => '01/**/**/**/**', 'mail' => 'GREATRUSSIA@gmail.com', 'portfolio' => 'http://merepatrie.com', 'twitter' => '/Rasputin', 'git' => '/Rasputin', 'facebook' => '/Rasputin');
    break;

  default:
  $coord = array('prenom' => 'Aledorian', 'nom' => 'Legrand', 'tel' => '07/70/45/56/05', 'mail' => 'aledorianlegrand@gmail.com', 'portfolio' => 'http://yamete.com', 'twitter' => '/Aledorian', 'git' => '/Aledorian', 'facebook' => '/dossierland');
    break;
}

 ?>


<!DOCTYPE html>
<html lang="fr">

  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Exo 3 PHP</title>

      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Font Awesome -->
      <script src="https://use.fontawesome.com/de7f2817e5.js"></script>


      <!-- Custom CSS -->
      <link href="css/style.css" rel="stylesheet">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>

  <body>
    <div class="container">
      <div class="row text-center">
        <button type="button" name="button"><a href="?user=Aledorian">Aledorian</a></button>
        <button type="button" name="button"><a href="?user=Elizra">Elizra</a></button>
        <button type="button" name="button"><a href="?user=Alastasia">Alastasia</a></button>
      </div>

      <!-- Recto card -->
      <div class="row">
        <div <?php if($user == 'Aledorian') {
          echo 'class = "col-xs-12 col-md-offset-3 col-md-6 recto-card style1"';
        }
        elseif ($user == "Elizra"){
          echo 'class = "col-xs-12 col-md-offset-3 col-md-6 recto-card style2"';
        }
        else{
          echo 'class = "col-xs-12 col-md-offset-3 col-md-6 recto-card style3"';
        }?>>

          <div class="row">
            <div class="col-md-12 valign">
              <h1><?php echo $coord['nom']." ".$coord['prenom']?></h1><br>
              <p>Toujours là pour vour servir...</p>
            </div>
          </div><!-- /row -->

        </div>
      </div><!-- /row -->

      <!-- Verso card -->
      <div class="row">
        <div <?php if($user == 'Aledorian') {
          echo 'class = "col-xs-12 col-md-offset-3 col-md-6 verso-card style1"';
        }
        elseif ($user == "Elizra"){
          echo 'class = "col-xs-12 col-md-offset-3 col-md-6 verso-card style2"';
        }
        else{
          echo 'class = "col-xs-12 col-md-offset-3 col-md-6 verso-card style3"';
        }?>>

          <div class="row">
            <div class="col-xs-12">
              <h2><?php echo $coord['nom']." ".$coord['prenom']?></h2>
              <p>Toujours là pour vour servir...</p>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6">
              <ul>
                <li><?php echo $coord['tel']?></li>
                <li><?php echo $coord['mail']?></li>
                <li><?php echo $coord['portfolio']?></li>
              </ul>
            </div>

            <div class="col-xs-6">
              <ul class="social-network">
                <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i><?php echo $coord['facebook'];?></li>
                <li><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i><?php echo $coord['twitter'];?></li>
                <!-- <li><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></li> -->
                <li><i class="fa fa-github-square fa-2x" aria-hidden="true"></i><?php echo $coord['git'];?></li>
              </ul>
            </div>

          </div><!-- /row -->


        </div>
      </div><!-- /row -->

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/de7f2817e5.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
