<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Déposer</title>
    <link rel="stylesheet" href="css/deposer.css">
    <link rel="icon" href="../gestion_eleves/png/logo.png">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   
   <?php
    $conn = mysqli_connect('localhost','root','root','pers');
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "uploads/".$fileName;
        
        $query = "INSERT INTO filedownload(filename) VALUES ('$fileName')";
        $run = mysqli_query($conn,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo '<script> alert("Bien Ajouté") </script>';
        }
        else{
            echo "error".mysqli_error($conn);
        }
        
    }
    
    ?>
    <div class="home_content">


<div class="row align-items-center">
     <a href="emploi.php" style="text-decoration:none;color:black;"> <i class='bx bx-undo'></i>HOME</a>
     <div class="card">
     <div class="a"><img src="png/logo.png" class="card-img-top" id="ab" alt="..."></div> <br>         
     <form action="deposer.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file"><br>
</br> <button type="submit" name="submit" class="btn btn-primary">Déposer</button>
        </form>
         </div>    
</div></div>    
     

</body>
</html>