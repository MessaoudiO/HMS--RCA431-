<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <title>Client</title>
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
          
          <li><a href="RDV.html">Rendez-vous</a></li>          
          <li><a href="loginClient.php">Vos Infos</a></li>
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
          <td><?php echo"$idNom";?></td>
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
          <td><?php echo"$idMedecin";?> a prescrit</td><?php echo"$idOrdo";?></td>
          
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