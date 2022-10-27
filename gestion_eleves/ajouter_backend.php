<?php 
session_start();

$con=mysqli_connect('localhost','root','root','pers');
$cne=$_POST['cne'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$password=$_POST['password']; 
$tel=$_POST['tel']; 
$adresse=$_POST['adresse'];
$sexe=$_POST['sexe'];
$classe=$_POST['classe'];

$req="INSERT INTO eleves (cne,nom,prenom,password,tel,adresse,sexe,classe) VALUES ('$cne','$nom','$prenom','$password','$tel','$adresse','$sexe','$classe')";
$req2="INSERT INTO users (id_user,user,password,role) VALUES ('$cne','$nom.$prenom','$password','eleve')";
$query_run=mysqli_query($con,$req);

if($query_run)
{
    $query_run=mysqli_query($con,$req2);
    echo '<script> alert("Bien Ajouté") </script>';
    header('refresh:0; url=ajouter.php');
    
}
else {
    echo mysqli_error($con);
}
?>