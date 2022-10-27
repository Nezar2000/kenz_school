<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
     <title>Afficher notes</title>
     <link rel="icon" href="img/logo.png">
 </head>
 <body style="background-color:whitesmoke;">
     
 
 </html>
  <?php 
   $con=mysqli_connect("localhost","root","root","pers");
    session_start();
    $query = "SELECT n.cne_el,n.matiere,n.controle,n.note,e.password FROM notes n,eleves e WHERE n.cne_el=e.cne AND e.password='$_SESSION[password]'"; 
    $query_run = mysqli_query($con,$query); ?>
    <table class="table table-striped table-hover" style="width:70%;margin:auto;">
    <thead>
      <tr>
        <th scope="col">Mon CNE</th>
        <th scope="col">Matiere</th>
        <th scope="col">Controle</th>
        <th scope="col">Note</th>
      </tr>
    </thead>
    <?php 
    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $row)
        {
            ?>
  <tbody>
    <tr>
      <td><?= $row['cne_el']; ?></th>
      <td><?= $row['matiere']; ?></td>
      <td><?= $row['controle']; ?></td>
      <td><?= $row['note']; ?></td>
    </tr>
  </tbody>
            <?php
        }
    }
    ?>
    </table>
    </body>