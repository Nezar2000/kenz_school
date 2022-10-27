<?php
$conn = mysqli_connect('localhost','root','root','pers');
if(isset($_POST['submit'])){
    $cne = $_POST['cne'];
    $msg = $_POST['msg'];
    $matiere = $_POST['matiere'];
    $date = $_POST['date'];

    $sql = "INSERT INTO remarque(cne , msg,matiere,date) VALUES ('$cne','$msg','$matiere','$date')";
    $res = mysqli_query($conn , $sql);

    if($res){
        echo '<script> alert("remarque Ajouté") </script>';
        header('Refresh:0; url=remarques.php');
    }
    else{
        echo "error".mysqli_error($conn);
    }
   

}
