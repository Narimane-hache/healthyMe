<?php 

  session_start();
  $connect = mysqli_connect("localhost", "root", "", "healthyme");  

  $email =   $_SESSION["email"]  ;
  $user = $connect -> query("SELECT * FROM users WHERE email='$email'  ;") or die($connect -> error);
  $row =$user->fetch_assoc();
  $id = $row['id'];
  $nom1 = $row['nom'];
  $genre1 = $row['genre'];
  $poids1 = $row['poids'];
  $taille1 = $row['taille'];
  $date_naissance1 =  $row['date_naissance'];
  
  $but1 = $row['but'];
  if (htmlspecialchars(isset($_POST['submit']))) {
    // enregistrer les valeurs récupérées du formulaire dans des variables 
        
        $nom =  htmlspecialchars($_POST['name']);
        $date =  trim($_POST["date"]);
        $genre = trim($_POST["genre"]);
        $taille = trim($_POST["taille"]);
        $poids = trim($_POST["poids"]);
        $but =  trim($_POST["but"]);
        $gender; 
        $calories;
            
            
        // modifier les valeurs  de la base de données avec la requete UPDATE .... SET 
        $connect->query("UPDATE users SET nom='$nom', date_naissance='$date',genre='$genre',taille='$taille',poids='$poids',but='$but' WHERE email='$email'") or die ($connect ->error);
    // algorithme de calcul
        switch ($genre){
            case 'femme':
          $gender= 655 + (9.6 * $poids ) + (1.8 * $taille) - (4.7 * 25);
         
        break;
          case 'homme':
          $gender=660 + (13.7 *$poids) + (5 * $taille) - (6.8 * 25);
          
        }switch ($but) {
            case 'perte du poids':
               $gender = $gender - 300 ;
                break;
                case 'gain du poids':
                    $gender = $gender + 300 ;
                     break;
            
            default:
            $gender;
                break;
        }
       
    }  ?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Profil</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" href="images/logo.png"/>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
           
          <!-- Navbar -->
    
    <?php include("inc/navbar.php"); ?>

<!-- fin navbar -->
 
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Mes informations</h2>
                    <ul class="breadcrumb">
                        
                        <li class="breadcrumb-item active">Mes informations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
<?php ?>
    <!-- Start Cart  -->
    <div class="cart-box-main ">
        <div class="container">
            <div class="row new-account-login">
               
            <?php  $row =$user->fetch_assoc()?>
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Mise à jour du profil</h3>
                        </div>
                        <form class="needs-validation"  action="profil.php" method="post">
                        
                            <div class="row">
                                <div class="col-lg-12 mt-3">
                                    <label class="">Nom</label>
                                    <input type="text" class="form-control trial-input" placeholder="First Name" required="" value="<?php echo $nom1; ?>" name="name">
                                </div>
                                <div class="col-lg-12 mt-3">
                               
                                    <label class="">Email</label>
                                    <input type="email" id="exampleInputEmail1" class="form-control trial-input" name="email" placeholder="Email Id" value="<?php echo $email; ?>" readonly="readonly">
                                   

                                </div>
                               
                                <div class="col-lg-12 mt-3">
                                <?php  ?>
                                    <label class="">Je suis: </label>
                                    <label class="">Femme </label>
                                    <input type="radio" id="femme" name="genre" value="femme" <?php if($genre1=="femme"){echo "checked=\"checked\" ";} ?>>
                                    <label class="">Homme</label>

                                    <input type="radio" id="homme" name="genre" value="homme" <?php if($genre1=="homme"){echo "checked=\"checked\" ";} ?>>
                                   

                                </div>
                                <div class="col-lg-12 mt-3">
                                    <label class="">Date de naissance</label>
                                    <input type="date" id="start" name="date"
                                    min="1900-01-01" max="2021-12-31" value="<?php echo $date_naissance1;?>">                    
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <label class="">Poids actuel en kg</label>
                                    <input type="number" class="form-control trial-input" name="poids" placeholder="poid" required="" value="<?php echo $poids1; ?>">
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <label class="">taille en cm</label>
                                    <input type="number" class="form-control trial-input" name="taille" placeholder="taille" required="" value="<?php echo $taille1; ?>">
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <label class="">Je veux : </label>
                                    <?php  ?>
                                    <label class="">gain du poids </label>
                                    <input type="radio" id="gain" name="but" value="gain du poids" <?php if($but1=="gain du poids"){echo "checked=\"checked\" ";} ?>>

                                    <label class="">perte du poids </label>
                                    <input type="radio" id="perte" name="but" value="perte du poids" <?php if($but1=="perte du poids"){echo "checked=\"checked\" ";} ?> >

                                    <label class="">maintient du poids </label>
                                    <input type="radio" id="maintient" name="but" value="maintient du poids"  <?php if($but1=="maintient du poids"){echo "checked=\"checked\" ";} ?>>

                                </div>
                               
                                <div class="col-lg-12">
                                    <button  class="btn btn-custom w-100 mt-3" name="submit"  value="Sauvegarder">Sauvegarder</button>

                                </div>
                                
                            </div>
                            
                        </form> 
                              
                            
                        
                    </div>
                
                </div>
            </div>
        </div>
    </div>



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
