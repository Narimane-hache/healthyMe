  
  <?php 
  
   include './config.php'; 
   ?>
 
  <!-- Start Main Top -->
  <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Acceuil</a></li>
                        <li class="nav-item"><a class="nav-link" href="tableau_calorie.php">Calories</a></li>
                        <li class="dropdown">
                                    <?php
                                         if(isset($_SESSION['email'])){
                                         ?>
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Profil</a>
                            <ul class="dropdown-menu">
								<li><a href="profil.php">mes données</a></li>
								<li><a href="rapport.php">mon rapport journalier</a></li>
                                <li><a href="./logout.php">déconnexion</a></li>
                                
                            </ul>
                          
                        </li>
                        <?php
                                    }
                                    else{
                            ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">connexion</a></li>
                        <?php
}
?>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Nous contacter</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->

            
            </div>
            
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- end main top -->