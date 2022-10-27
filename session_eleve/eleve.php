<?php
$con=mysqli_connect('localhost','root','root','pers');
session_start();
$sql ="SELECT * FROM eleves";
$sql2 ="SELECT * FROM professeurs";
$sql3 ="SELECT * FROM classes";
$result = mysqli_query($con,$sql);
$result2 = mysqli_query($con,$sql2);
$result3 = mysqli_query($con,$sql3);
$n_etu = mysqli_num_rows($result);
$n_prof = mysqli_num_rows($result2);
$n_cla = mysqli_num_rows($result3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/eleve.css">
    <link rel="icon" href="img/logo.png">
    <style>
        
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <a href="eleve.php"><i class='bx bxs-school'></i>
                <div class="logo_name">Ecole Kenz</div></a>
            </div>
            <i class='bx bx-menu' id="btn"></i>   
        </div>
        <ul class="nav_list">
        <li>
                <a href="eleve.php">
                    <i class='bx bx-note'></i>
                    <span class="links_name">Statistiques</span>
                </a></li>
            <li>
            <a href="note.php">
                <i class='bx bx-notepad'></i>
                <span class="links_name">Mes Notes</span>
            </a></li>
            <li>
                <a href="telecharger.php">
                    <i class='bx bx-book'></i>
                    <span class="links_name">Les devoirs</span>
                </a></li>
                <li>
            <a href="emploi.php">
                <i class='bx bxs-institution'></i>
                <span class="links_name">L'emploi du temps</span>
            </a></li>
            <li>
                <a href="remarque.php">
                    <i class='bx bxs-note'></i>
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
                     <img src="img/ele.png"class="card-img-center" alt="...">
                     <div class="card-body">
                     <h3><?php echo $n_etu?> Élèves</h3>
                     </div>
                </div>
                </div>



               <div class="col">
               <div class="card">
                     <img src="img/profs.png"class="card-img-center" alt="..." >
                     <div class="card-body">
                     <h3><?php echo $n_prof?> Professeurs</h3>
                     </div>
                </div>
                </div>

                
                <div class="col">
                <div class="card">
                     <img src="img/classroom.png"class="card-img-center" alt="...">
                     <div class="card-body">
                     <h3><?php echo $n_cla?> Classes</h3>
                     </div>
                </div>
                </div>

                
                
                
        </div>
       
</div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
