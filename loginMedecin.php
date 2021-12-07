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
	$sql = "SELECT * FROM medecin WHERE nom like '%$_POST[nom]%'";
	$result = mysqli_query($link,$sql) or die ("Erreur insertion");

	while($row = mysqli_fetch_row($result)){
    $nom  = $row[2];
    $prenom  = $row[1];  
		$Adresse  = $row[7];
		$Tel = $row[8];
		$Specialite = $row[9];
    $patients = $row[4];
	}
    mysqli_close($link);
?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <title>Medecin</title>
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
          <li><a href="login.html">Se Déconnecter</a></li>
          
          <li><a href="Patients.html">Vos Patients</a></li>          
          <li><a href="loginMedecin.php">Vos Infos</a></li>
          <li>        </li>
           <li class="navbar__btn">
            <a href="" class="button" target="cadreChange">Imprimer</a>
           </li>
         </ul>
      </nav>
      <br><br><br><br><br><br><br>

      <div id="w4"><h2>Bonjour Medecin:</h2>
      <table border="1">
        <tr>
          <td id="tdRes"><p>VOTRE NOM COMPLET :</p></td>
          <td><?php  echo "$nom<p>"; echo"$prenom" ; ?></td>
        </tr>
        <tr>
          <td id="tdRes"><p>VOTRE ADRESSE :</p></td>
          <td><?php  echo"$Adresse";?></td>
        </tr>
        <tr>
          <td id="tdRes"><p>VOTRE TELEPHONE :</p></td>
          <td><?php echo"$Tel";?></td>
        </tr>
        <tr>
          <td id="tdRes"><p>VOTRE Specialité :</p></td>
          <td><?php echo"$Specialite";?></td>
        </tr>
        <tr>
          <td></td>
          <td><a href="updateMedecin.html" class="button" target="cadreChange">Changer vos infos </a></td>
        </tr>
        <tr>
          <td></td>
          <td><a href="RDVMedecin.php" class="button" target="cadreChange">PRENDRE UN RDV pour patient</a></td>
        </tr>
      </table>
    </div>
    <div id="w4"><h2>Liste de vos patient:</h2>
      <table border="1">
        <tr>
          <td colspan="2" id="tdRes"><?php  echo "$patients" ; ?></td>
        </tr>
        <form action="PassOrdo.php" method="POST">
        <tr>
          <td colspan="2" id="tdRes">
          <p>Choisir le patient :</p> <select name="patient" style="width: 350px;height: 40px;" size="1" >
                                 <option selected="selected" value="Niko">Niko</option>
                                 <option value="Djerisa">Djerisa</option>
                                 <option value="Messaoudi">Messaoudi</option>
                                 
                           </select><br><br>
          </td>
        </tr>
        
        <tr>
        
          <td colspan="2">
            <input name="ordonnance" type="text" required="required">
          </td>
          <tr>
          <td colspan="2">
            <input type="submit" value="Passer l'ordonnace">
          </td>
          </tr>
          
          
        </tr>
        </form>
      </table>
    </div>