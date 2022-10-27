<?php 
session_start();

$con=mysqli_connect('localhost','root','root','pers');
$cni_pr=$_POST['cni_pr'];
$nom_pr=$_POST['nom_pr'];
$prenom_pr=$_POST['prenom_pr'];
$tel_pr=$_POST['tel_pr']; 
$adresse_pr=$_POST['adresse_pr'];
$password_pr=$_POST['password_pr']; 


$req="INSERT INTO professeurs (cni_pr,nom_pr,prenom_pr,tel_pr,adresse_pr,password_pr) VALUES ('$cni_pr','$nom_pr','$prenom_pr','$tel_pr','$adresse_pr','$password_pr')";
$req2="INSERT INTO users (id_user,user,password,role) VALUES ('$cni_pr','$nom_pr.$prenom_pr','$password_pr','prof')";
$query_run=mysqli_query($con,$req);

if($query_run)
{
    $query_run=mysqli_query($con,$req2);
    echo '<script> alert("Bien Ajouté") </script>';
    header('refresh:0; url=ajouter_pr.php');
}
else {
    echo '<script> alert("Erreur!!!") </script>';
}
?>