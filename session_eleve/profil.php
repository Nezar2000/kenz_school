<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/pro.css">
    <link rel="icon" href="img/logo.png">
     <title>Mon profil</title>
 </head>
 <body style="background-color:whitesmoke;">
    
<?php 
 $con=mysqli_connect("localhost","root","root","pers");
 session_start();
$query = "SELECT * FROM eleves WHERE password='$_SESSION[password]'"; 
    $query_run = mysqli_query($con,$query); ?>
    <?php 
    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $row)
        {?>
        <a href="eleve.php" style="text-decoration:none;color:black;"> <i class='bx bx-undo'></i>RETOUR</a>
   <div class="card" >
  <img src="img/profil.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mon Profil</h5>
        <div class="mb-3">
            <label for="cne" class="form-label" >Mon CNE</label>
            <input type="text" class="form-control" name="cne" readonly value="<?= $row['cne']; ?>">
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Mon prenom</label>
            <input type="text" class="form-control" name="prenom" value="<?= $row['prenom']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Mon nom</label>
            <input type="text" class="form-control" name="nom" value="<?= $row['nom']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mon mot de passe</label>
            <input type="text" class="form-control" name="password" value="<?= $row['password']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Mon adresse</label>
            <input type="text" class="form-control" name="adresse" value="<?= $row['adresse']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="sexe" class="form-label">Mon sexe</label>
            <input type="text" class="form-control" name="sexe" value="<?= $row['sexe']; ?>" readonly>
        </div>
        <div class="mb-3">
        <label for="classe" class="form-label" >Ma classe</label>
        <input type="text" class="form-control" name="classe" value="<?= $row['classe']; ?>" readonly>    
        </div>
        
        <div class="modal-footer">
        </div>
        
</form>
  </div>
</div>
        <?php    }
                }
        ?>
    </body>
    </html>