<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../gestion_eleves/png/logo.png">
    <title>Ajouter note</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/ajo.css">
</head>
<body >
<a href="note.php" style="text-decoration:none;color:black;"> <i class='bx bx-undo'></i>RETOUR</a>
    <div class="container" style="width:40%;margin-top:50px;">
<form action="ajouternoteback.php"  method="POST"> 
        <div class="mb-3">
            <label for="cne" class="form-label" >CNE</label>
            <input type="text" class="form-control" name="cne" required>
        </div>
        <div class="mb-3">
            <label for="matiere" class="form-label">Matière</label><br>
            <select name="matiere" >
                <option value="العربية">العربية</option>  
                <option value="التربية الإسلامية">التربية الإسلامية</option>
                <option value="الاجتماعيات">الاجتماعيات</option>
                <option value="الرياضيات">الرياضيات</option>
                <option value="النشاط العلمي">النشاط العلمي</option>
                <option value="علوم الحياة و الأرض">علوم الحياة و الأرض</option>
                <option value="الفيزياء و الكيمياء">الفيزياء و الكيمياء</option>
                <option value="FRANÇAIS">FRANÇAIS</option>
                <option value="MATHÉMATIQUE">MATHÉMATIQUE</option>
                <option value="S.V.T">S.V.T</option>
                <option value="P.C">P.C</option>
                <option value="ANGLAIS">ANGLAIS</option>
                <option value="INFORMATIQUE">INFORMATIQUE</option>
                <option value="SPORT">SPORT</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="controle" class="form-label">Numero de controle</label>
            <input type="number" max="4" min="1" class="form-control" name="controle" required>
        </div>
        <div class="mb-3">
            <label for="note" class="form-label">La note</label>
            <input type="text" class="form-control" name="note" required>
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