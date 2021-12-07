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
$req = "INSERT INTO client ( nom , prenom ,login ,antecedents,medecin,datenaissance ,Adresse,Telephone, password,dateRDV) VALUES 
('".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["login"]."','".$_POST["antecedents"]."','".$_POST["medecin"]."','".$_POST["naissance"]."','".$_POST["adresse"]."','".$_POST["Telephone"]."','".$_POST["password"]."','".$_POST["date"]."')";
$sql = mysqli_query($conn,$req);
if (!$sql){
    die ("FAILED TO INSERT");
}
else{
   header("location:login.html"); 
}