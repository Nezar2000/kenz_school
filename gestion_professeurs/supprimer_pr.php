<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="../gestion_eleves/png/logo.png">
    <link rel="stylesheet" href="css_pr/supprimer_pr.css">
    <title>Supprimer professeur</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Supprimer professeur</h4>
                        <a href="prof.php" style="text-decoration:none;color:black;"> <i class='bx bx-undo'></i>RETOUR</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Entrer le CIN">
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
                                        $query = "SELECT * FROM professeurs WHERE cni_pr='$_GET[search]' ";
                                        $query_run = mysqli_query($con, $query);

                                        while($row=mysqli_fetch_array($query_run))
                                        {
                                            ?>
                                             <form action="supprimer_pr.php" method="POST" >
                                                <input type="hidden" name="cni_pr" value="<?php echo $row['cni_pr'] ?>"/><br>
                                                 <input type="text" name="nom_pr" value="<?php echo $row['nom_pr'] ?>" /><br>
                                                 <input type="text" name="prenom_pr" value="<?php echo $row['prenom_pr'] ?>"/><br>                                               
                                                 <input type="text" name="password_pr" value="<?php echo $row[ 'password_pr'] ?>"/><br>
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
    $cni_pr=$_POST['cni_pr'];
    $nom_pr=$_POST['nom_pr'];
    $prenom_pr=$_POST['prenom_pr'];
    $password_pr=$_POST['password_pr'];

    $query = "DELETE FROM `professeurs` WHERE cni_pr='$_POST[cni_pr]'"; 
    $query2 = "DELETE FROM `users` WHERE id_user='$_POST[cni_pr]'";
    $query3 = "DELETE FROM `classe_prof` WHERE cin_pr='$_POST[cni_pr]'";
    $query_run = mysqli_query($con,$query3);
    $query_run = mysqli_query($con,$query2);
    $query_run = mysqli_query($con,$query);

    if($query_run)
{
    echo '<script> alert("Bien Supprimé") </script>';
    $query_run=mysqli_query($con,$query2);
}
else {
    echo '<script> alert("Erreur!!!") </script>';
}
}


?>