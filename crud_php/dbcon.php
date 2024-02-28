
<?php
  define("HOSTNAME", "localhost");  
  define("USERNAME", "root");  
  define("PASSWORD", "");  
  define("DATABASE", "crud_operation");  

  $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
     
  // Vérifier la connexion
  if (!$connection) {
      die("Connection failed");
  }
// Vérifier la connexion
if (!$connection) {
    die("Échec de la connexion à la base de données: " . mysqli_connect_error());
}
