<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="png/logo.png">
    <title>Modifier élève</title>
    <link rel="stylesheet" href="css/chercher.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Modifier élève</h4>
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
                                             <form action="chercher.php" method="POST" >
                                              <BR> <label for="cne" style="margin-right:10px;font-weight:bold;">CNE:</label> 
                                                <input type="text" name="cne" value="<?php echo $row['cne'] ?>"/><BR>
                                                <label for="nom" style="margin-right:10px;font-weight:bold;">Nom:</label> <input type="text" name="nom" value="<?php echo $row['nom'] ?>" /><br>
                                                <label for="prenom" style="margin-right:10px;font-weight:bold;">Prenom:</label><input type="text" name="prenom" value="<?php echo $row['prenom'] ?>"/><br>
                                                <label for="adresse" style="margin-right:10px;font-weight:bold;">Adresse:</label><input type="text" name="adresse" value="<?php echo $row['adresse'] ?>"/><br>
                                                <label for="password" style="margin-right:10px;font-weight:bold;">Password:</label><input type="text" name="password" value="<?php echo $row[ 'password'] ?>"/><br>
                                                <label for="tel" style="margin-right:10px;font-weight:bold;">Numero de téléphone:</label><input type="text" name="tel" value="<?php echo $row['tel'] ?>"/><br>
                                                <label for="sexe" style="margin-right:10px;font-weight:bold;">Sexe:</label><input type="text" name="sexe" value="<?php echo $row['sexe'] ?>"/><br>
                                                <label for="classe" style="margin-right:10px;font-weight:bold;">Classe:</label> <input type="text" name="classe" value="<?php echo $row['classe'] ?>" />
                                                 <br><input type="submit" id="aa" name="mod" value="modifier"><br>
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
if(isset($_POST['mod']))
{
    $cne=$_POST['cne'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['adresse'];
    $password=$_POST['password'];
    $tel=$_POST['tel'];
    $sexe=$_POST['sexe'];
    $classe=$_POST['classe'];

    $query = "UPDATE `eleves` SET cne='$_POST[cne]',nom='$_POST[nom]', prenom='$_POST[prenom]',adresse='$_POST[adresse]',password='$_POST[password]',tel='$_POST[tel]',sexe='$_POST[sexe]', classe='$_POST[classe]' where cne='$_POST[cne]'"; 
    $query_run = mysqli_query($con,$query);

    if($query_run)
{
    echo '<script> alert("Bien Modifié") </script>';
}
else {
    echo '<script> alert("Erreur!!!") </script>';
}
}


?>