<?php
// Initialiser la session 
session_start(); 
// blog de narimane hacheche

$_SESSION = array();
// Detruire la session 
session_destroy();
// Redirection 

header("location: login.php");
exit;
?>