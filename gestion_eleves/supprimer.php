<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="png/logo.png">
    <title>Supprimer élève</title>
    <link rel="stylesheet" href="css/supprimer.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Supprimer élève</h4>
                        <a href="admin.php" style="text-decoration:none;color:black;"> <i class='bx bx-undo'></i>RETOUR</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Entrer le CNE ">
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
                                        $query = "SELECT * FROM eleves WHERE cne='$_GET[search]' ";
                                        $query_run = mysqli_query($con, $query);

                                        while($row=mysqli_fetch_array($query_run))
                                        {
                                            ?>
                                             <form action="supprimer.php" method="POST" >
                                                <BR><input type="text" name="cne" readonly value="<?php echo $row['cne'] ?>"/><br>
                                                 <input type="text" name="nom" readonly value="<?php echo $row['nom'] ?>" /><br>
                                                 <input type="text" name="prenom" readonly value="<?php echo $row['prenom'] ?>"/><br>
                                                 <input type="text" name="password" readonly value="<?php echo $row['password'] ?>"/><br>                                               
                                                 <input type="submit" name="delete" value="supprimer"><br>
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
if(isset($_POST['delete']))
{
    $cne=$_POST['cne'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $password=$_POST['password'];

    $query = "DELETE FROM `eleves` WHERE cne='$_POST[cne]'"; 
    $query1 = "DELETE FROM `notes` WHERE cne_el='$_POST[cne]'"; 
    $query2 = "DELETE FROM `users` WHERE id_user='$_POST[cne]'";
    $query3 = "DELETE FROM `remarque` WHERE cne='$_POST[cne]'";
    
    $query_run=mysqli_query($con,$query2);
    $query_run=mysqli_query($con,$query3);
    $query_run=mysqli_query($con,$query1);
    $query_run =mysqli_query($con,$query);

    if($query_run)
{
    echo '<script> alert("Bien Supprimé") </script>';
    header('refresh:0; url=supprimer.php');
}
else {
    echo '<script> alert("erreur !!!") </script>';
}
}


?>