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
    <title>Calories des fuits</title>
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
      <style type = "text/css">
         p { margin: 0; }
         table, th, td {
            border: 1px solid black;
            border-collapse: collapse;

         }
         @media screen and (max-width: 450px) {
  table {
    width=300px;
  }
}
      </style>
    

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@300&display=swap" rel="stylesheet">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                    <h2>Calories des fuits</h2>
                    <ul class="breadcrumb">
                        
                        <li class="breadcrumb-item active">Fruits</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <?php
        require_once( "sparqllib.php" );
          
        $db = sparql_connect( "https://dbpedia.org/sparql" );
        if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
        sparql_ns( "rdf","http://www.w3.org/1999/02/22-rdf-syntax-ns#" );
        sparql_ns( "dbp","http://dbpedia.org/property/" );
        sparql_ns( "dbo","http://dbpedia.org/ontology/" );
        sparql_ns( "xsd","http://www.w3.org/2001/XMLSchema#" );
         
        $sparql = "SELECT distinct  * WHERE {
           ?s dbo:wikiPageWikiLink dbr:Fruit .
           ?s rdfs:label ?name.
           ?s dbp:kj ?o.
             FILTER ( lang(?name) = 'fr' )
           
                          
                      
                       } ";

$result = sparql_query( $sparql ); 
if( !$result ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
 
$fields = sparql_field_array( $result );
 
?> 
<table class="table table-striped table-dark">
<thead>
<tr>
<th scope="col">lien</th>
<th scope="col">nom</th>
<th scope="col">calories en joules</th>

</tr>
</thead>
<?php
print "<tr>";
foreach( $fields as $field )
{
   print "<th>$field</th>";
}
print "</tr>";
while( $row = sparql_fetch_array( $result ) )
{
   print "<tr>";
   foreach( $fields as $field )
   {
      print "<td>$row[$field]</td>";
   }
   print "</tr>";
}

?>
</table>
</thead>
      
  

    <!-- footer -->

<?php include("inc/footer.php"); ?>
<!-- footer -->
   
   

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