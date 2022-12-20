
<!DOCTYPE html>
<html>
    <body>
        <h1>Bases de données MySQL</h1>  
<?php
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'assos';
  
  //On établit la connexion
  $conn = new mysqli($servername, $username, $password , $db);
  
  // vérifiecation de la connexion
  if($conn->connect_error){
      die('Erreur : ' .$conn->connect_error);
  }
  
  $instrument = $_POST["Instrument"];
 
  $sql = "SELECT nb , Type FROM instrument WHERE nom= '".$instrument."';";
  $result = $conn->query($sql);
  $row = $result->fetch_object();
if ($row)
{

    $nb = $row->nb;
    $type = $row-> Type;
    echo"il y a : $nb $instrument de type $type";
}
else echo "cette instrument n'existe pas";
 
  ?>


    </body>
</html>