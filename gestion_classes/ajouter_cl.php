<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../gestion_eleves/png/logo.png">
    <title>Ajouter classe</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css_cl/ajouter.css">
</head>
<body >
<a href="classes.php" style="text-decoration:none;color:black;"> <i class='bx bx-undo'></i>RETOUR</a>
    <div class="container" style="width:40%;margin-top:50px;">
<form action="aj_backend.php" method="POST"> 
        <div class="mb-3">
            <label for="nom_cl" class="form-label" >Nom de classe</label><br>
            <select name="nom_cl" >
                <option value="CP-AR1">CP-AR1</option>
                <option value="CE1-AR1">CE1-AR1</option>
                <option value="CE2-AR1">CE2-AR1</option>
                <option value="CM1-AR1">CM1-AR1</option>
                <option value="CM2-AR1">CM2-AR1</option>
                <option value="6e-AR1">6e-AR1</option>
                <option value="7e-AR1">7e-AR1</option>
                <option value="8e-AR1">8e-AR1</option>
                <option value="9e-AR1">9e-AR1</option>
                <option value="CP-FR1">CP-FR1</option>
                <option value="CE1-FR1">CE1-FR1</option>
                <option value="CE2-FR1">CE2-FR1</option>
                <option value="CM1-FR1">CM1-FR1</option>
                <option value="CM2-FR1">CM2-FR1</option>
                <option value="6e-FR1">6e-FR1</option>
                <option value="7e-FR1">7e-FR1</option>
                <option value="8e-FR1">8e-FR1</option>
                <option value="9e-FR1">9e-FR1</option>
                <option value="CP-AR2">CP-AR2</option>
                <option value="CE1-AR2">CE1-AR2</option>
                <option value="CE2-AR2">CE2-AR2</option>
                <option value="CM1-AR2">CM1-AR2</option>
                <option value="CM2-AR2">CM2-AR2</option>
                <option value="6e-AR2">6e-AR2</option>
                <option value="7e-AR2">7e-AR2</option>
                <option value="8e-AR2">8e-AR2</option>
                <option value="9e-AR2">9e-AR2</option>
                <option value="CP-FR2">CP-FR2</option>
                <option value="CE1-FR2">CE1-FR2</option>
                <option value="CE2-FR2">CE2-FR2</option>
                <option value="CM1-FR2">CM1-FR2</option>
                <option value="CM2-FR2">CM2-FR2</option>
                <option value="6e-FR2">6e-FR2</option>
                <option value="7e-FR2">7e-FR2</option>
                <option value="8e-FR2">8e-FR2</option>
                <option value="9e-FR2">9e-FR2</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="niveau_cl" class="form-label">Niveau</label><br>
            <select name="niveau_cl" >
                <option value="CP">CP</option>
                <option value="CE1">CE1</option>
                <option value="CE2">CE2</option>
                <option value="CM1">CM1</option>
                <option value="CM2">CM2</option>
                <option value="6e">6e</option>
                <option value="7e">7e</option>
                <option value="8e">8e</option>
                <option value="9e">9e</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="saison_cl" class="form-label">Année scolaire</label>
            <input type="text" class="form-control" name="saison_cl" placeholder="2022/2023" required>
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