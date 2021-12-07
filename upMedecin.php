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
$req = "UPDATE medecin SET Nom='".$_POST["nom"]."',Prenom='".$_POST["prenom"]."' , login = '".$_POST["login"]."',Adresse = '".$_POST["adresse"]."', MotDePasse ='".$_POST["password"]."',Telephone='".$_POST["telephone"]."' , Specialite ='".$_POST["Specialité"]."' WHERE nom='".$_POST['nom']."'";
$sql = mysqli_query($conn,$req);
if (!$sql){
    die ("FAILED TO INSERT");
}
else{
   header("location:login.html"); 
}