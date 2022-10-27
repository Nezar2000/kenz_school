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
</head>
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
                <span class="links_name">Devoirs</span>
                </a></li>
            <li>
            <a href="remarques.php">
                <i class='bx bx-note'></i>
                <span class="links_name">Remarques</span>
            </a></li>
            <li>
                <a href="../logout/logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Se déconnecter</span>
                </a></li>
        </ul>
    </div>


<div class="home_content">


         <div class="row align-items-center">
           
         
                <div class="col">
                <div class="card">
                     <img  style="height:150px;width:9.5em;margin-top:10px;" src="img/a.png"class="card-img-center" alt="...">
                     <div class="card-body">
                     <a href="deposer_dev.php" class="btn  btn-primary" >Déposer un devoir</a>
                     </div>
                </div>
                </div>



               <div class="col">
               <div class="card">
                     <img  style="height:150px;width:9.5em;margin-top:10px;" src="img/dow.png"class="card-img-center" alt="..." >
                     <div class="card-body">
                     <a href="telecharger.php" class="btn btn-primary">Télécharger un devoir</a>
                     </div>
                </div>
                </div>



                <div class="col">
                <div class="card">
                    <img   style="height:150px;width:9.5em;margin-top:10px;" src="img/del.png" class="card-img-center" alt="...">
                    <div class="card-body">
                    <a href="supprimer_dev.php" class="btn btn-primary">Supprimer un devoir</a>
                    </div>
                </div>
                </div>
                
                
        </div>
       
</div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
