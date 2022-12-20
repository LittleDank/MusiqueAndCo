<!DOCTYPE html>
<html>
<link href="css/Style.css" rel="stylesheet">
<head>
<style>
    .Supprimer
    {
      color: black;  
    }
		td,th { padding:1em; }
		thead { background-color : #557CBA; }
		tbody { background-color : #CED4E5; }
		tfoot { background-color : red;     }
	</style>
</head>
 <body>
 <?php 
 $connect = new mysqli("localhost", "root", "", "assos");
        if ($connect->connect_errno)
        {
            echo "Echec lors de la connexion à MySQL : (" . $connect->connect_errno . ") " . $connect->connect_error;
        }
 
        $reponse= $connect->query('SELECT * FROM instrument');
 
    ?>
          
        <table>
 
                <tr>
                    <td>Instrument</td>
                    <td>Type </td>
                    <td>nombre</td>
                    <td>Supprimer</td>
 
            <?php //Affichages des lignes du tableau
 
            while($donnees = mysqli_fetch_array($reponse))
            {
            ?>
                <tr>
                    <td><?php echo $donnees['Nom'];?></td>
                    <td><?php echo $donnees['Type'];?></td>
                    <td><?php echo $donnees['Nb'];?></td>
                    <td><?php echo" <a class='Supprimer' href='Supprimer.php?id=".$donnees['id']."'> Supprimer</a>" ?></td>
                </tr>
            <?php
            }
            ?>
        </table>

<a href="http://localhost/formulaireProf/Ajouter.php" style="color:#FF0000;">Ajouter</a>
<a href="http://localhost/formulaireProf/Suprimer.php" style="color:#FF0000;"> Suprimer</a>
<a href="http://localhost/formulaireProf/AfficheTable.php" style="color:#FF0000;"> Rechercher</a>
<a href="http://localhost/formulaireProf/afficheElememt.php" style="color:#FF0000;"> Afficher Tout les elements</a>
 </body>
</html>




