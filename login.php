<?php  
 $connect = mysqli_connect("localhost", "root", "", "healthyme");  
 session_start();  
 if(isset($_SESSION["email"]))  
 {  
      header("location:index.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["email"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Champs obligatoires")</script>';  
      }  
      else  
      {  
          

           $email = mysqli_real_escape_string($connect, $_POST["email"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = password_hash($password, PASSWORD_DEFAULT);  
           $query = "INSERT INTO users(email, password) VALUES('$email', '$password')";  
          

           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Bien enregistré !")</script>';  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["email"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Les deux champs sont obligatoires ")</script>';  
      }  
      else  
      {  
           $email = mysqli_real_escape_string($connect, $_POST["email"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $query = "SELECT * FROM users WHERE email = '$email'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
                          $_SESSION["email"] = $email;  
                          header("location:profil.php");  
                          echo '<script>alert("connexion réussie")</script>';  

                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("données incorrectes ")</script>';  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("données incorrectes ")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | PHP Login Registration Script by using password_hash() method</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link rel="icon" type="image/png" href="images/logo.png"/>

      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center">connexion</h3>  
                <br />  
                <form method="post">  
                     <label>Enter email</label>  
                     <input type="email" name="email" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-success" />  
                     <br />  
                     <p align="center"><a href="login.php?action=register" class="text-success">s'inscire</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">inscription</h3>  
                <br />  
                <form method="post">  
                     <label>Enter email</label>  
                     <input type="email" name="email" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-success" />  
                     <br />  
                     <p align="center"><a href="login.php?action=login" class="text-success">se connecter</a></p>  
                </form>  
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html>  