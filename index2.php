<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion produits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
        
        <table>
            <tr id="items">
                <th>Designation</th>
                <th>Quantite</th>
                <th>Prix</th>
                <th>date d'enregistrement</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 
                //inclure la page de connexion
                include_once "connexion.php";
                //requête pour afficher la liste des employés
                $req = mysqli_query($con , "SELECT * FROM produit");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore d'employé ajouter !" ;
                    
                }else {
                    //si non , affichons la liste de tous les employés
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['nompro']?></td>
                            <td><?=$row['qu_produit']?></td>
                            <td><?=$row['pu_produit']?> <?php  echo "XAF";?></td>
                            <td><?=$row['date_en']?></td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                            <td><a href="modifier.php?id=<?=$row['id_produit']?>"><img src="images/pen.png"></a></td>
                            <td><a href="supprimer.php?id=<?=$row['id_produit']?>"><img src="images/trash.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>
   
   
 
   
    </div>

</body>

</html>