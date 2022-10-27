<?php 
$con=mysqli_connect("localhost","root","root","pers");
if(isset($_POST['af']))
{
    $id_cl=$_POST['id_cl'];
    $cin_pr=$_POST['cin_pr'];
    $matiere=$_POST['matiere'];


$req="INSERT INTO classe_prof (id_cl,cin_pr,matiere) VALUES ('$id_cl','$cin_pr','$matiere')";
$query_run = mysqli_query($con,$req);
if($query_run)
{
    echo "<script type='text/javascript'> alert('Bien Affecter !!');
        document.location='affecter.php'
         </script>";
}
else {
    echo "<script type='text/javascript'> alert('Error !!');
        document.location='affecter.php'
         </script>";
}
}



if(isset($_POST['de']))
{
    $id_cl=$_POST['id_cl'];
    $cin_pr=$_POST['cin_pr'];
    $matiere=$_POST['matiere'];


$query= "DELETE FROM classe_prof WHERE id_cl='$_POST[id_cl]'  AND cin_pr='$_POST[cin_pr]'  AND matiere='$_POST[matiere]'";
$query_run = mysqli_query($con,$query);
if($query_run)
{
    echo "<script type='text/javascript'> alert('Bien désaffecter !!');
        document.location='affecter.php'
         </script>";
}
else {
    echo "<script type='text/javascript'> alert('Error !!');
        document.location='affecter.php'
         </script>";
}
} 



?>