<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="../gestion_eleves/png/logo.png">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/su.css">
     <title>Supprimer une note</title>
 </head>
 <body style="background-color:whitesmoke;">
     
 
 </html>
  <?php 
   $con=mysqli_connect("localhost","root","root","pers");
   if(isset($_GET['id'])){
    $query = "DELETE FROM `notes` WHERE cne_el='$_GET[cne_el]'"; 
    $query_run = mysqli_query($con,$query);
   }
    
    $query = "SELECT * FROM notes WHERE cne_el='$_POST[cne]' ORDER BY controle ASC"; 
    $query_run = mysqli_query($con,$query); ?>
    <table class="table table-striped table-hover" style="width:70%;margin:auto;">
    <thead>
      <tr>
        <th scope="col">CNE</th>
        <th scope="col">Matiére</th>
        <th scope="col">N° Controle</th>
        <th scope="col">Note</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <?php 
    if(mysqli_num_rows($query_run)>0){
        foreach($query_run as $row)
        {
            
                  echo "<tbody>
                      <tr>
                    
                        <td> ".$row['cne_el']."</td>
                        <td> ".$row['matiere']. "</td>
                        <td> ".$row['controle']. "</td>
                        <td> ".$row['note']. "</td>
                        <td><a href='supprimerback.php?id=".$row['id']."' class='btn btn-danger'>Supprimer</a></td>
                      </tr>
                        </tbody> " ;
        }
    }
      
    if(isset($_GET['id'])){
      $query = "DELETE FROM `notes` WHERE id='$_GET[id]'"; 
      $query_run = mysqli_query($con,$query);
      if($query_run)
{ echo "<script type='text/javascript'> alert('Bien Supprimé !!');
       
  </script>";
  header('Refresh:0; url=supprimer.php');
}
else {
    echo "<script type='text/javascript'> alert('Error !!');
       
         </script>";
         header("Refresh:0; url=supprimer.php");
}
      }?>
    </table>
    </body>