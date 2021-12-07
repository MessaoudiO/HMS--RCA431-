<?php
 $bdd = new PDO("mysql:host=localhost;dbname=clinique",'root','');
if(isset($_POST['sub'])){
    if(!empty($_POST['login'] AND !empty($_POST['password']))){
        $slt = $bdd->prepare("SELECT * FROM client where login =? AND password =?");
        $slt->execute(array($_POST['login'],$_POST['password']));
        $exist = $slt->rowCount();
        if ($exist>0){
          header('location:./loginClient.php');
          $_SESSION['nom'] = $c['Nom'];

        }else{
          $err="Ce compte n'existe pas";
        }
      }
}
?>
