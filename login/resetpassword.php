<?php 
$con=mysqli_connect('localhost','root','root','pers');
if(!isset($_GET["code"])){
    exit("can't find page");
}
$code=$_GET['code'];
$getEmailQuery= mysqli_query($con,"SELECT email FROM reset_pass WHERE code='$code'");
if(mysqli_num_rows($getEmailQuery)==0){
    exit("can't page");
}
if(isset($_POST['pwd']) && $_POST['pwd']==$_POST['cpwd']){
    $pw = $_POST['pwd'];

    $row=mysqli_fetch_array($getEmailQuery);
    $email=$row['email'];
    $query=mysqli_query($con,"UPDATE users SET password='$pw' WHERE id_user='$email'");
    $query2=mysqli_query($con,"UPDATE admin SET pwd_ad='$pw' WHERE mail='$email'");
    $query3=mysqli_query($con,"DELETE FROM reset_pass WHERE code='$code'");
    if($query){
        echo '<script> alert("Mot de passe bien changé") </script>';
        header('refresh:0; url=loginn.php');
    }
    else{
        exit("wrong");
    }
}
elseif(!($_POST['pwd']==$_POST['cpwd'])){
    echo '<script> alert("Mots de passe differents") </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>récupérer le mot de passe</title>
    <link rel="shortcut icon" href="png/logo.png" type="image/x-icon">
</head>
<body>
    <section>
        <div class="form-container">
            <img src="png/lg.png" alt="back">
<form  method="post">
<div class="control">
<label for="pwd">Nouveau mot de passe:</label>
<input type="password" name="pwd" placeholder="Nouveau mot de passe">
<label for="cpwd">Confirmer le mot de passe:</label>
<input type="password" name="cpwd" placeholder="Nouveau mot de passe"><br>
</div>
<div class="control">
<input type="submit" name="sub" value="Changer"></div>
</form>
</div>
    </section>
</body>
</html>