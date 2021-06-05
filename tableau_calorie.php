<?php 
  session_start();
 
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
    <title>Tableau des calories</title>
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
      <!-- pageCSS -->
      <link rel="stylesheet" href="css/calories.css">
    


</head>

<body>
   

  <!-- navbar -->
  <?php include("inc/navbar.php"); ?>

  <!-- fin navbar -->
    
    <!--types aliments  -->
   <!-- Start All Title Box -->
   <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Trouver les calories</h2>
                    <ul class="breadcrumb">
                        
                        <li class="breadcrumb-item active">Calories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->


    <!-- <div class="wishlist-box-main"> -->
<section class="calories">




   

    <div class="row text-center">
        <div class="col-sm-12  col-lg-3 m-5 ">
            <!-- <div class="card" style="width: 18rem;">
             <img src="images/fruits.jpg" class="card-img-top fruits" style="width: 18rem; alt="...">
             <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             </div>
            </div> -->
            <figure class="snip1321"><img src="images/legumes.jpg" alt="sq-sample28" class="image_alim"/>
  <figcaption><i class="ion-share"></i>
    <h4>Légumes    </h4>
    
  </figcaption><a href="legumes.php" target="_blank"></a>
</figure>
        </div>
        <div class=" col-sm-12  col-lg-3 m-5 ">
        <figure class="snip1321"><img src="images/plats.jpg" alt="sq-sample28" class="image_alim"/>
  <figcaption><i class="ion-share"></i>
    <h4>Plats   </h4>
    
  </figcaption><a href="plats.php" target="_blank"></a>
</figure>
        </div>
        <div class=" col-sm-12  col-lg-3 m-5 ">
        <figure class="snip1321"><img src="images/fruits.jpg" alt="sq-sample28" class="image_alim"/>
  <figcaption><i class="ion-share"></i>
    <h4>Fruits    </h4>
   
  </figcaption><a href="fruits.php" target="_blank"></a>
</figure>
        </div>
   
    </div>
</section>


   
    

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