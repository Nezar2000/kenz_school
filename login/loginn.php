<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Se connecter</title>
    <link rel="shortcut icon" href="png/logo.png" type="image/x-icon">
</head>
<body>
    <section>
        <div class="form-container">
            <img src="png/lg.png" alt="back">
            <form action="logincheck.php" method="POST">
                <div class="control">
                    <label for="id_user">Utilisateur</label>
                    <input type="text" name="id_user" id="id_user" placeholder="CNE ou CIN">
                </div>
                <div class="control">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="*********">
                </div>
               
                <div class="control">
                    <input type="submit" name="submit" id="submit" value="ENTRER">
                </div>
                
                <div class="control">
                   <a href="log_reset.php" style="color:rgb(247, 78, 36);">Mot de passe oublié ? (Admin)</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
