<?php
//creation de la variable de connexion a la base de donees
 $bdd = new PDO("mysql:host=localhost;dbname=clinique",'root','');

 //creation de la variable  de la requette sql
 // $variable = $Bdd ->query("Code sql");
 $reqListPatients = $bdd->query("SELECT * FROM client ");
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <title>Vos patients</title>
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
          <li></li>
           <li class="navbar__btn">
            <a href="" class="button" target="cadreChange">Imprimer</a>
           </li>


          </ul>
      </nav>
      <br><br><br><br><br><br><br>
      <div id="w4"><h2>LISTES DE VOS PATIENTS :</h2>
        <center><table border="1">
            <tr> 
            <th><p>login<p></th>
            <th><p>Nom</p></th>
            <th><p>Prenom</p></th>
            <th><p>Date de naissance</p></th>
             <th><p>Antecedents</p></th>
             </tr>
             <?php 
             //affiche ligne par ligne grace au fetch
             while ($p = $reqListPatients->fetch()){
               ?>
                <tr id='tdth'>
                         <!-- afficher les colone de chaque ligne -->
                          <td id='tdth'><?=$p['login']; ?></td>
                          <td id='tdth'><?=$p['nom']; ?></td>
                          <td id='tdth'><?=$p['prenom']; ?></td>
                          <td id='tdth'><center><?=$p['datenaissance']; ?></center></td>
                          <td id='tdth'><?=$p['antecedents']; ?></td>
                      </tr>
               <?php
             }
             ?>
                     
                  </table></center>
    </div>