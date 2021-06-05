<?php
// include database connection file
$connect = mysqli_connect("localhost", "root", "", "healthyme");  


// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$results = $connect -> query("DELETE FROM aliments WHERE id=$id;") or die($connect -> error);


// if ($results) {
//     echo "supprimé ";
// }

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:rapport.php");
?>