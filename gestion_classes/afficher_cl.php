<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="../gestion_eleves/png/logo.png">
    <title>Afficher Classe</title>
    <link rel="stylesheet" href="css_cl/aff.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Afficher Classe</h4>
                        <a href="classes.php" style="text-decoration:none;color:black;"> <i class='bx bx-undo'></i>RETOUR</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Chercher classe...">
                                        <button type="submit" class="btn btn-primary">Chercher</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","root","pers");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM classes WHERE CONCAT(nom_cl) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        while($row=mysqli_fetch_array($query_run))
                                        { ?>
                                            <form action="afficher_cla.php" method="POST" >
                                            <br><label for="id_cl" style="margin-right:10px;font-weight:bold;">ID de la classe:</label>
                                               <input readonly name="id_cl" value="<?php echo $row['id_cl'] ?>"/><br>
                                               <label for="nom_cl" style="margin-right:10px;font-weight:bold;">Nom de classe:</label> <input type="text" readonly name="nom_cl" value="<?php echo $row['nom_cl'] ?>" /><br>
                                               <label for="niveau_cl"  style="margin-right:10px;font-weight:bold;">Niveau:</label><input type="text" readonly name="niveau_cl" value="<?php echo $row['niveau_cl'] ?>"/><br>
                                               <label for="saison_cl"  style="margin-right:10px;font-weight:bold;">Année scolaire:</label><input type="text" readonly name="saison_cl" value="<?php echo $row['saison_cl'] ?>"/><br>
                                                <br><input type="submit" id="aa" name="aff" value="Afficher"><br>
                                                <div class="bordure"></div>
                                           </form>
                                           <?php
                                   }
                                   }
                               ?>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
   
                      
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
$con=mysqli_connect("localhost","root","root","pers");
?>