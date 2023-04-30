<?php 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
$con=mysqli_connect('localhost','root','root','pers');
$ok="ecolekenz8888@gmail.com";

if(isset($_POST['id_user']) && $_POST['id_user']==$ok){
$email_to=$_POST['id_user'];
$code=uniqid(true);
$query="INSERT INTO reset_pass (code,email) VALUES ('$code','$email_to')";
$query_run=mysqli_query($con,$query);
if(!$query_run){
    exit("error");
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '###';                     //SMTP username
    $mail->Password   = '###';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->addAddress($email_to);     //Add a recipient
    $mail->addReplyTo('###', 'KENZ');

    //Content
    $url = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/resetpassword.php?code=".$code;
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Changement du mot de passe";
    $mail->Body    = "Click <a href='$url'>this link</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; 

    $mail->send();
    include('verif.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

exit();
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
            <form  method="POST">
                <div class="control">
                    <label for="id_user">Adresse email :</label>
                    <input type="text" name="id_user" id="id_user" placeholder="Entrez l'adresse email">
                </div>
                <div class="control">
                    <input type="submit" name="submitpass" id="submitpass" value="Envoyer le lien de verification">
                </div>
            </form>
        </div>
    </section>
</body>
</html>
