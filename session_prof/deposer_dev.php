<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../gestion_eleves/img/logo.png">
    <title>Emploi du temps</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .cont{
            width: 100%;
            height: 50%;
            padding: 40px;
            margin: 40px;
            position: relative;
            top:10%;
            left: 15%;
        }
    </style>
</head>

<body>
<body>
<div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <a href="profhome.php"><i class='bx bxs-school'></i>
                <div class="logo_name">Ecole Kenz</div></a>
            </div>
            <i class='bx bx-menu' id="btn"></i>   
        </div>
        <ul class="nav_list">
        <li>
                <a href="profhome.php">
                <i class='bx bx-male'></i>
                    <span class="links_name">Statistiques</span>
                </a></li>
            <li>
                <a href="devoir.php">
                <i class='bx bx-notepad'></i>
                <span class="links_name">Devoir</span>
                </a></li>
            <li>
            <a href="remarques.php">
                <i class='bx bx-note'></i>
                <span class="links_name">Remarque</span>
            </a></li>
            <li>
                <a href="../logout/logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Se déconnecter</span>
                </a></li>
        </ul>
    </div>

    <div class="home_content">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="cont">
        <label for="matiere" class="form-label">Matiere</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="matiere">
        <option value="العربية">العربية</option>  
                <option value="التربية الإسلامية">التربية الإسلامية</option>
                <option value="الاجتماعيات">الاجتماعيات</option>
                <option value="الرياضيات">الرياضيات</option>
                <option value="النشاط العلمي">النشاط العلمي</option>
                <option value="علوم الحياة و الأرض">علوم الحياة و الأرض</option>
                <option value="الفيزياء و الكيمياء">الفيزياء و الكيمياء</option>
                <option value="FRANÇAIS">FRANÇAIS</option>
                <option value="MATHÉMATIQUE">MATHÉMATIQUE</option>
                <option value="INFORMATIQUE">INFORMATIQUE</option>
                <option value="S.V.T">S.V.T</option>
                <option value="P.C">P.C</option>
                <option value="ANGLAIS">ANGLAIS</option>
                <option value="SPORT">SPORT</option>
    </select>
        <label for="exampleDataList" class="form-label">Class</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="classe">
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
        <div class="mb-3">
            <label for="formFileSm" class="form-label">devoir</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="file">
        </div>
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"></label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">envoyer</button>
    </div>
    </div>
</form>
    </div>    
</body>

</html>
