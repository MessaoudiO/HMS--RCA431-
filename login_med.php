<?php
session_start();
 $bdd = new PDO("mysql:host=localhost;dbname=clinique",'root','');
if(isset($_POST['sub'])){
    if(!empty($_POST['login'] AND !empty($_POST['password']))){
        $slt = $bdd->prepare("SELECT * FROM medecin where login =? AND MotDePasse =?");
        $slt->execute(array($_POST['login'],$_POST['password']));
        $exist = $slt->rowCount();
        if ($exist>0){
          header('location:./LoginMedecin.php');
          $c = $slt->fetch();
          $_SESSION['id'] = $c['id'];
          $_SESSION['nom'] = $c['Nom'];
          $_SESSION['Adresse']= $c['Adresse'];
          $_SESSION['Telephone']= $c['Telephone'];
          $_SESSION['Specialite']= $c['Specialite'];

        }else{
          $err="Ce compte n'existe pas";
        }
      }
}
?>


