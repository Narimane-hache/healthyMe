<?php 
  session_start();
 // Check if the user is logged in, if not then redirect him to login page
 $connect = mysqli_connect("localhost", "root", "", "healthyme");  
 $email =   $_SESSION["email"]  ;
//  $calories = 0;
  $user = $connect -> query("SELECT * FROM users WHERE email='$email'  ;") or die($connect -> error);
  $row =$user->fetch_assoc();
  $id = $row['id'];
  $nom = $row['nom'];
  $genre = $row['genre'];
  $poids = $row['poids'];
  $taille = $row['taille'];
  
  $but = $row['but'];
 
 $result = $connect -> query("SELECT * FROM aliments WHERE user='$id';") or die ($connect ->error);
    if(isset($_POST['add'])) {

     $name = $_POST['name'];
        $quantite = $_POST['quantite'];
        $cal = $_POST['cal'];
        $calor = $quantite * $cal/100 ; 
        $date=date("d-m-Y");
        $sql = "INSERT INTO aliments (name,calories_cal,user,date) VALUES ('$name','$calor','$id',$date) ;";
     //   $insert= $connect -> query("INSERT INTO aliments (name,calories_cal,user,date) VALUES ('$name','$calor','$id',$date) ;") or die ($connect ->error);
    //     if ($insert) {
    //         echo"<script> alert('Aliments bien ajouté!')</script>";
    //     }else {
    //     echo"<script> alert('oops erreur ! ')</script>";

    // }
    if ($connect->query($sql) === TRUE) {
        echo"<script> alert('Aliments bien ajouté!')</script>";
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
     
      
 }

 $resultat = $connect -> query("SELECT SUM(calories_cal) as caloriescal FROM aliments WHERE user='$id';") or die ($connect ->error);
 $row =$resultat->fetch_assoc();
 $calories= $row['caloriescal'];
 $update = $connect -> query("UPDATE calories SET calorie_moy='$calories'  WHERE user='$id';") or die ($connect ->error);

//  $connect -> query("INSERT INTO calories (calorie,user,calorie_moy) VALUES ('$gender','$id','$calories') ;") or die ($connect ->error);

 $jour = time() - ( 24 * 60 * 60);
 $hier = date('Y-m-d', $jour) ;
// $journalier = $connect -> query("DELETE FROM aliments WHERE date<='$hier' AND user='$id';") or die ($connect ->error);



   ?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Mon rapport journalier</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="icon" type="image/png" href="images/logo.png"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="icon" type="image/png" href="images/logo.png"/>
    <script src="https://kit.fontawesome.com/9213264f90.js" crossorigin="anonymous"></script>



</head>
<?php 




?>
<body>
    <!-- Navbar -->
    
    <?php include("inc/navbar.php"); ?>

    <!-- fin navbar -->
<!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Mes repas</h2>
                    <?php 
                  
                     $resultats = $connect -> query("SELECT * FROM calories WHERE user='$id';") or die ($connect ->error);
                     $variable = mysqli_fetch_array($resultats);
                    $calories=  $variable['calorie_moy'];
                     $gender = $variable['calorie'];

 ?>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">Vous avez manger <?php echo $calories ;?>  </li>
                        <li class="breadcrumb-item active">Vous devez manger <?php echo $gender ;?> Calories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
<!-- intro -->
<form action="rapport.php" method="POST">
<div class="row my-5">
    
    <div class="col-lg-6 col-sm-6 m-4">
        <div class="update-box">
            <input  type="text" class="form-control m-4" placeholder="Ajouter manuellement le nom" name="name"  type="text">
            <input  type="number" class="form-control m-4" placeholder=" Quantité par g" name="quantite" >
            <input  type="number" class="form-control m-4" placeholder=" calories par 100g" name="cal"  >


            <button class="btn btn-theme"  name="add">ajouter </button>
        </div>
    </div>
</div>
</form>
<hr>
<!-- tableau affichage -->
    <div class="cart-box-main">
        <div class="container">
           

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nom de l'aliment</th>
                  
                    <th scope="col">calories</th>
                  </tr>
                </thead>
                <tbody>
                    <?php  while($aliments = mysqli_fetch_array($result)) :?>
                  <tr>
                    <th scope="row"><?php echo $aliments['name'];?></th>
                    <td><?php echo $aliments['calories_cal'];?></td>
                    <td> <a href="<?php echo "delete.php?id=".$aliments['id'];?>"><i class="fas fa-trash-alt"></i></a></td>
                 
                  </tr>
                <?php endwhile;   ?>
                </tbody>
              </table>

           
        </div>
    </div>
    <!-- fin tableau affichage -->

    

    <!-- footer -->

<?php include("inc/footer.php"); ?>
<!-- footer -->
    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
