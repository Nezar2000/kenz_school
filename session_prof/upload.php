<?php
if(isset($_POST['submit']))
{
    $file = $_FILES['file'];
    $filename = $_FILES['file']['name'];
    $tmpname = $_FILES['file']['tmp_name'];
   
        $filedest = 'uploads/'.$filename;
          
    $matiere = $_POST['matiere'];
    $class = $_POST['classe'];
    $message = $_POST['msg'];

    $host = "localhost";
    $user = "root";
    $password ="root";
    $db = "pers";

    $data = mysqli_connect($host,$user,$password,$db);
    $sql = "INSERT INTO devoir(matiere , class , msg ,filename) VALUES ('$matiere','$class','$message','$filename')";

    $res = mysqli_query($data , $sql);
    if($res){
        move_uploaded_file($tmpname,$filedest);
        echo '<script> alert("Bien Déposé") </script>';
        header('refresh:0; url=deposer_dev.php');
    
    }
    else{
        echo "error".mysqli_error($data);
    }
}
