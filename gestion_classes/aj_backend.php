<?php 
session_start();

$con=mysqli_connect('localhost','root','root','pers');
$nom_cl=$_POST['nom_cl'];
$niveau_cl=$_POST['niveau_cl'];
$saison_cl=$_POST['saison_cl']; 

$req="INSERT INTO classes (nom_cl,niveau_cl,saison_cl) VALUES ('$nom_cl','$niveau_cl','$saison_cl')";
$query_run=mysqli_query($con,$req);
if($query_run)
{
    echo '<script> alert("Bien Ajouté") </script>';
    header('refresh:0; url=ajouter_cl.php');
}
else {
    echo '<script> alert("Erreur!!!") </script>';
}

?>