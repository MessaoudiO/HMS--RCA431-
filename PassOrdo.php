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
$req = "UPDATE client SET ordonnance='".$_POST["ordonnance"]."' WHERE nom='".$_POST["patient"]."' ";
$sql = mysqli_query($conn,$req);
if (!$sql){
    die ("FAILED TO UPDATE");
}
else{
   header("location:login.html"); 
}
?>