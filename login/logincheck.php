<?php
    $host = "localhost";
    $user = "root";
    $password ="root";
    $db = "pers";

    $data = mysqli_connect($host,$user,$password,$db);

    if($data===false)
    {
        echo 'conn';
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
       {$user = $_POST['id_user'];
        $password = $_POST['password'];} 
    
    $sql = "SELECT * FROM users WHERE id_user = '" . $user . "' and password = '" . $password."'";

    $result=mysqli_query($data,$sql);
    $row = mysqli_fetch_array($result);
    
    if($row["role"]=="eleve") 
    {
        session_start();
        $_SESSION['id_user']=$user;
        $_SESSION['password']=$password;
        $_SESSION['role']="eleve";
        header("location:../session_eleve/eleve.php");
    }else
    if($row["role"]=="admin") 
    {
        session_start();
        $_SESSION['id_user']=$user;
        $_SESSION['password']=$password;
        $_SESSION['role']="admin";
        header("location:../statistiques/stats.php");
    }else
    if($row["role"]=="prof") 
    {
        session_start();
        $_SESSION['id_user']=$user;
        $_SESSION['password']=$password;
        $_SESSION['role']="prof";
        header("location:../session_prof/profhome.php");
    }
    else{   
        echo "<script type='text/javascript'> alert('Utilisateur ou mot de passe invalid !!');
        document.location='loginn.php'
         </script>";
    }
?>