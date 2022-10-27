<?php
$conn = mysqli_connect('localhost','root','root','pers');
if(!empty($_GET['file'])){
    $fileName  = basename($_GET['file']);
    $filePath  = "uploads/".$fileName;
    
    if(unlink($filePath)){
        $query2 = "DELETE FROM devoir WHERE filename='$fileName'";
        $run2 = mysqli_query($conn,$query2);
        echo "<script type='text/javascript'> alert('Bien Supprimé !!');
       
  </script>";
  header('Refresh:0; url=profhome.php');
    }
    else{
        echo "file not exit";
    }
}