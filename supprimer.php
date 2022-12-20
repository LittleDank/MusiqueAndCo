<?php 
 $connect = new mysqli("localhost", "root", "", "assos");
        if ($connect->connect_errno)
        {
            echo "Echec lors de la connexion à MySQL : (" . $connect->connect_errno . ") " . $connect->connect_error;
        }
 
       $id = $_GET["id"];
       $reponse= $connect->query('delete from instrument where id='.$id);
       header("location:afficheElememt.php");
    ?>