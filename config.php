 <?php
// données du serveur et notre base 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'healthyme');
 
/* Se connecter à la base */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 //vérifier la connexion
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?> 
