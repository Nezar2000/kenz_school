<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
     <title>Afficher remarques</title>
     <link rel="icon" href="img/logo.png">
 </head>
 <body style="background-color:whitesmoke;">
     
 
 </html>
  <?php 
   $con=mysqli_connect("localhost","root","root","pers");
    session_start();
    $query = "SELECT * FROM remarque WHERE cne='$_SESSION[id_user]'"; 
    $query_run = mysqli_query($con,$query); ?>
    <table class="table table-striped table-hover" style="width:70%;margin:auto;">
    <thead>
      <tr>
        <th scope="col">Mon CNE</th>
        <th scope="col">Matiere</th>
        <th scope="col">Date</th>
        <th scope="col">Remarque</th>
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
      <td><?= $row['matiere']; ?></td>
      <td style="width:130px;"><?= $row['date']; ?></td>
      <td><?= $row['msg']; ?></td>
    </tr>
  </tbody>
            <?php
        }
    }
    ?>
    </table>
    </body>