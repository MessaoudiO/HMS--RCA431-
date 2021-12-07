<?php 
session_start();
$host="localhost";
$user="root";
$pass="";
$datab="clinique";
$conn = new mysqli($host,$user,$pass,$datab);
if ($conn -> connect_error)
{
    die ("failed to connect" . $conn -> connect_error);
}
$req = "UPDATE client SET nom='".$_POST["nom"]."',prenom='".$_POST["prenom"]."' , login = '".$_POST["login"]."',Datenaissance ='".$_POST["naissance"]."',Adresse = '".$_POST["adresse"]."', password ='".$_POST["password"]."',Telephone='".$_POST["telephone"]."' , sexe ='".$_POST["sexe"]."' WHERE nom='".$_POST['nom']."'";
$sql = mysqli_query($conn,$req);
if (!$sql){
    die ("FAILED TO INSERT");
}
else{
   header("location:login.html"); 
}