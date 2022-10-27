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
    <link rel="stylesheet" href="css/emploi.css">
</head>
   <body>
    <div class="home_content">
<div class="row align-items-center">
     <a href="eleve.php" style="text-decoration:none;color:black;"> <i class='bx bx-undo'></i>RETOUR</a>
     <div class="card">
     <div class="a"><img src="img/logo.png" class="card-img-top" id="ab" alt="..."></div> <br>            
     <?php     
               $conn = mysqli_connect('localhost','root','root','pers');
               $query2 = "SELECT * FROM devoir ";
               $run2 = mysqli_query($conn,$query2);
               
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>
               <div class="a">Télécharger :<a href="Download_dev.php?file=<?php echo $rows['filename'] ?>"><?= $rows['filename'] ?></a><br>
               Message: <?= $rows['msg'] ?>  <br> <br></div>
 <?php
               }
               ?>
    

         </div>    
</div></div>    
     

</body>
</html>