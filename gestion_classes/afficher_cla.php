<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="icon" href="../gestion_eleves/png/logo.png">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
     <title>Afficher classe</title>
 </head>
 <body style="background-color:whitesmoke;">
     
 
 </html>
  <?php 
   $con=mysqli_connect("localhost","root","root","pers");
    
    $query = "SELECT * FROM eleves WHERE classe='$_POST[nom_cl]'"; 
    $query_run = mysqli_query($con,$query); ?>
    <table class="table table-striped table-hover" style="width:70%;margin:auto;">
    <thead>
    <tr><th  colspan=4 style="text-align:center;"><h4>Élèves</h4></th></tr>
      <tr>
        <th scope="col">CNE</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Classe</th>
      </tr>
    </thead>
    <?php 
    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $row)
        {
            ?>
  <tbody>
    <tr>
      <td><?= $row['cne']; ?></th>
      <td><?= $row['nom']; ?></td>
      <td><?= $row['prenom']; ?></td>
      <td><?= $row['classe']; ?></td>
    </tr>
  </tbody>
            <?php
        }
    }
    ?>
    </table><br><br><hr>



    <?php
    $req = "SELECT cni_pr,nom_pr,prenom_pr,matiere FROM classe_prof,professeurs WHERE id_cl='$_POST[id_cl]' and cin_pr=cni_pr ";
    $query_run = mysqli_query($con,$req); ?>
    <table class="table table-striped table-hover" style="width:70%;margin:auto;">
    <thead>
      <tr><th colspan=4 style="text-align:center;"><h4>Professeurs</h4></th></tr>
      <tr>
        <th scope="col">CIN</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Matiere</th>
      </tr>
    </thead>
    <?php 
    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $row)
        {
            ?>
  <tbody>
    <tr>
      <td><?= $row['cni_pr']; ?></td>
      <td><?= $row['nom_pr']; ?></td>
      <td><?= $row['prenom_pr']; ?></td>
      <td><?= $row['matiere']; ?></td>
    </tr>
  </tbody>
            <?php
        }
    }
    ?>
    </table>
    </body>