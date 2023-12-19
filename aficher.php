<?php
require('connixion.php');
$reqq='select * from client';

$req=$con->prepare($reqq);
$req->execute();
$tab=$req->fetchAll(PDO::FETCH_ASSOC);






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>prenom</th>
            <th>nom</th>
            <th>photo</th>
            <th>age</th>
            <th>Action</th>
        </tr>
        <?php  foreach($tab  as $lign) { ?>

 
              <tr>
                <td><?= $lign["id"] ?></td>
                <td><?= $lign["prenom"] ?></td>
                <td><?= $lign["nom"] ?></td>
              
                <td><img src ="<?= $lign["photo"] ?>"  alt ='photo'/></td>
                <td><?= $lign["age"] ?></td>
                <td><a  onclick= 'return confirm("wach m2kd")' href="sup.php?id=<?=$lign['id']?>">Supprimer</a>
                <a href="modf.php?id=<?= $lign['id'] ?> "> update</a>
                <a href="chow.php?id=<?= $lign['id'] ?> "> show</a>
            
            

            
            </td>
                


              </tr>


        <?php  }  ?>
      <a href='ajouter.php'>Create</a><br>
      <a href="sup2.php">supp</a>
      <a href="rech.php">rechercher</a>

    </table>

</body>
</html>