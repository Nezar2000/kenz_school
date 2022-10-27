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
    <form action="remarqueback.php" method="post" enctype="multipart/form-data">
    <div class="cont">
        <label for="exampleDataList" class="form-label">CNE</label>
        <input type="text" class="form-control" id="exampleDataList" placeholder="" name="cne">  
        <label for="matiere" class="form-label">Matière</label>
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
        <label for="date" class="form-label">date de remarque</label>
        <input type="date" class="form-control" name="date">      
        <div class="mb-3">
        <label for="msg" class="form-label">Remarque</label>
  <textarea class="form-control" rows="3" name="msg"></textarea>
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit" name="submit">envoyer</button>
    </div>
    </div>
</form>
    </div>    
</body>

</html>
