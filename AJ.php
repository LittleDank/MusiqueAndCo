<!DOCTYPE html>
<html>
 <body>
<?php
   $servername = 'localhost';
   $username = 'root';
   $password = '';
   $db = 'assos';
   
   //On établit la connexion
   $conn = new mysqli($servername, $username, $password , $db);
   // on déclar les variable
   $Categorie = $_POST["categorie"];
   $instrument = $_POST["Instrument"];
   $nb = $_POST["nb"];
   //on ajoute les element dans la basse de donée 
   $sql = "INSERT INTO instrument (id, Nom, Nb , Type ) VALUES (NULL, '".$instrument."', '".$nb."' ,'".$Categorie."' )";
   if ($conn->query($sql) === TRUE) {
      echo " addition of elements in the table created successfully";
} else {
      echo "Error addition table: " . $conn->error;
}
   ?>
<a href="http://localhost/formulaireProf/Ajouter.php" style="color:#FF0000;">ok</a>
    
</body>

</html>

