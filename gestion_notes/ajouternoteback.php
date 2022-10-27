<?php 
session_start();

$con=mysqli_connect('localhost','root','root','pers');

$cne=$_POST['cne'];
$matiere=$_POST['matiere'];
$controle=$_POST['controle'];
$note=$_POST['note'];

$req="INSERT INTO notes (cne_el,matiere,controle,note) VALUES ('$cne','$matiere','$controle','$note')";
$query_run=mysqli_query($con,$req);
if($query_run)
{
    echo '<script> alert("Bien Ajouté") </script>';
    header('refresh:0; url=ajouter_note.php');
}
else {
    echo '<script> alert("Erreur!!!") </script>';
}
?>