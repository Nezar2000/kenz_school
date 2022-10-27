<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../gestion_eleves/png/logo.png">
    <title>Ajouter professeur</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css_pr/ajouter_pr.css">
</head>
<body >
<a href="prof.php" style="text-decoration:none;color:black;"> <i class='bx bx-undo'></i>RETOUR</a>
    <div class="container" style="width:40%;margin-top:50px;">
<form action="ajouter_backend_pr.php" method="POST"> 
<div class="mb-3">
            <label for="cni_pr" class="form-label">Cin</label>
            <input type="text" class="form-control" name="cni_pr" required>
        </div>
        <div class="mb-3">
            <label for="nom_pr" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom_pr" required>
        </div>
        <div class="mb-3">
            <label for="prenom_pr" class="form-label">Prenom</label>
            <input type="text" class="form-control" name="prenom_pr" required>
        </div>
        <div class="mb-3">
            <label for="tel_pr" class="form-label">Numero de téléphone</label>
            <input type="tel" class="form-control" name="tel_pr" required>
        </div>
        <div class="mb-3">
            <label for="password_pr" class="form-label">Mot de passe</label>
            <input type="text" class="form-control" name="password_pr" value="<?php echo uniqid() ?>" readonly required>
        </div>
        <div class="mb-3">
            <label for="adresse_pr" class="form-label">Adresse</label>
            <input type="text" class="form-control" name="adresse_pr" required>
        </div>
        
        
        <div class="modal-footer">
        <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Annuler">
        <input type="submit" name="add" id="add" class="btn btn-primary" value="Ajouter">
        </div>
        
</form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>