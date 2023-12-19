<?php
require("connixion.php") ;
///kanjibo m3lomat
@$id=$_GET['id'];
@$prenom=$_POST['prenom'];
@$nom=$_POST['nom'];
@$photo=$_POST['photo'];
@$age=$_POST['age'];
$req=$con->prepare("select * from client  where id=?");
$req->execute([$_GET['id']]);
$tab=$req->fetch(PDO::FETCH_ASSOC);


 
?>
<ul>
    <li><?=$tab['id'] ?></li>
    <li><?=$tab['prenom'] ?></li>
    <li><?=$tab['nom'] ?></li>
    <li><?=$tab['photo'] ?></li>
    <li><?=$tab['age'] ?></li>
    
</ul>