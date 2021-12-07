<?php
	ini_set('display_errors','Off');
	ini_set('error_reporting', E_ALL );
	define('WP_DEBUG', false);
	define('WP_DEBUG_DISPLAY', false);

	$user='root';
	$pwd='';
	$host='localhost';
	$bdd='clinique';

	$link = mysqli_connect($host,$user,$pwd,$bdd) or die("erreur de connection au serveur");
	mysqli_select_db($link,$bdd);
	$sql = "SELECT * FROM client WHERE nom like '%$_POST[nom]%'";
	$result = mysqli_query($link,$sql) or die ("Erreur insertion");
	while($row = mysqli_fetch_row($result)){
    $nom = $row[1]; 
		$idAdresse = $row[8];
		$idTele = $row[9];
		$idOrdo = $row[7];
    $idMedecin = $row[6];
    $idDate = $row[12];
	}
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <title>LOGIN CLIENT</title>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel='stylesheet' id='jquery-ui-base-css'  href='https://code.jquery.com/ui/1.12.1/themes/start/jquery-ui.css' type='text/css' media='all' />
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="logstyle.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li id="logo"><img height="50px" src="Images/logoHopital.jpeg"></li>
          <li><a href="Contactez.html">Contactez-nous</a></li>
          
          <li><a href="login.html">Login</a></li>          
          <li><a href="Home.html">Intro</a></li>
          <li>        </li>
           <li class="navbar__btn">
            <a href="" class="button" target="cadreChange">Imprimer</a>
           </li>

          </ul>
      </nav>
      <br><br><br><br><br><br><br>
      <div id="w4"><h2>Vos infos personnels :</h2>
      <table border="1">
        <tr>
          <td id="tdRes"><p>VOTRE NOM COMPLET :</p></td>
          <td><?php echo"$nom";?></td>
        </tr>
        <tr>
          <td id="tdRes"><p>VOTRE ADRESSE :</p></td>
          <td><?php echo"$idAdresse";?></td>
        </tr>
        <tr>
          <td id="tdRes"><p>VOTRE TELEPHONE :</p></td>
          <td><?php echo"$idTele";?></td>
        </tr>
        <tr>
          <td id="tdRes"><p>Ordonance :</p></td>
          <td><?php echo"$idMedecin";?> a prescrit<?php echo"$idOrdo";?></td>
          
        </tr>
        <tr>
          <td id="tdRes"><p>Votre prochain rendez vous :</p></td>
          <td><?php echo"$idDate";?> </td>
          
        </tr>
        
        <tr>
          <td></td>
          <td>
            
            <a href="updateClient.html" class="button" target="cadreChange">Changer vos inFos</a></td>
        </tr>
        <tr>
          <td></td>
          <td><a href="RDVClient.html" class="button" target="cadreChange">PRENDRE UN RDV</a></td>
        </tr>
      </table>
    </div>
      </table>
    </div>
    </header>

  </body>
</html>  