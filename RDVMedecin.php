
<!DOCTYPE html>
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
      <div id="w2" class="dv" >
        <form action="ajoutRDV.php" method="POST">
       <h2>Prendre un RDV :</h2>
      <p>Nom</p> <input name="nom" type="text" required="required">
      <p>Prenom</p> <input name="prenom" type="text" required="required">
      <p>Adresse</p> <input name="adresse" type="text">
      <p>Telephone</p> <input name="Telephone" type="text">
      <p>Date de naissance</p> <input name="naissance" type="text" required="required" placeholder="DD/MM/YYYY">
      <p>login</p> <input name="login" type="text" required="required" required="required">
      <p>Password</p> <input name="password" type="text" required="required">
      <p>Medecin</p> <input name="medecin" type="text" required="required">
      <p>Date et heure du rendez-vous</p> <input name="date" type="datetime" required="required" placeholder="DD/MM/YYYY">
      <p>Antecedents </p> <input  name="antecedents" type="text" >
      <br><br>
      <input type="submit" value="VALIDER">
            </form></div>
