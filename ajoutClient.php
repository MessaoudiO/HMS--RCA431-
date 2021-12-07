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
$req = "INSERT INTO client (id, nom , prenom ,login ,datenaissance ,adresse, password,sexe) VALUES 
('".$_POST["id"]."','".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["login"]."','".$_POST["naissance"]."','".$_POST["adresse"]."','".$_POST["password"]."','".$_POST["Sexe"]."')";
$sql = mysqli_query($conn,$req);
if (!$sql){
    die ("FAILED TO INSERT");
}
else{
   header("location:login.html"); 
}