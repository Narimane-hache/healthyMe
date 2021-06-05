
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
    <title>HealthyMe</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="icon" type="image/png" href="images/logo.png"/>

    <!-- fontawesom cdn -->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

  

</head>

<body>
  

<?php include("inc/navbar.php"); ?>
    <!-- End Main Top -->

   

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue à  <br> HealthyMe</strong></h1>
                            <p class="m-b-40">Une nouvelle version de vous meme</p>
                        
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue à  <br> HealthyMe</strong></h1>
                            <p class="m-b-40">Une nouvelle version de vous meme</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue à 
                          
                             <br> HealthyMe</strong></h1>
                            <p class="m-b-40">Une nouvelle version de vous meme</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->
    <!-- inscrivez vous  -->
    <section id="choose" class="choose greenbackground">
        <div class="container">
            <div class="row">
                <div class="main_choose_area sections text-center">
                    <div class="lesson_title">                      
                        <h2 class="m-4">Voulez vous gagner ou perdre votre poids?</h2>
                    </div>
                    <div class="main_choose_content">
                        <div class="single_choose_content">
                            <div class="singel_choose_img">
                                <img src="images/choose.png" alt="" />
                            </div>

                            <h1 class="text-center m-auto">Calculez facilement et rapidement votre besoin en calories quotidien</h1>
                            <h3 class="m-4">Chaque jour, vous dépensez de l'énergie pour réfléchir, marcher, digérer... La quantité de calories consommée dépend de plusieurs facteurs : âge, poids, activité physique... Or le carburant nécessaire à votre corps est apporté par votre alimentation. Il est donc essentiel de connaître vos besoins caloriques quotidiens, pour adapter vos apports. Que vous soyez homme ou femme, voici un test pour calculer exactement la quantité de calories qu'il vous faut par jour !<a href="inscription.php"> Inscrivez-vous</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin inscrivez vous -->

  


    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Tableau de calories</h1>
                        <h2>Le tableau des calories indique pour chaque aliment consommé combien de calories est emmagasiné et vous aide ainsi à composer vos repas par rapport à vos besoins énergétiques.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            
                            <button data-filter=".top-featured" href="tableau_calorie.php"><a href="tableau_calorie.php">  Retrouvez-le ici</a> </button>
                          
                        </div>
                    </div>
                </div>
            </div>

            
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    

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