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


//aficher
if(isset($_POST['submit'])){
$req2=$con->prepare("update client set  prenom=?,nom=? ,photo=?,age=?  where id =?");
$req2->execute([$prenom,$nom,$photo,$age,$id]);
header("location:aficher.php");
}
?>  
<form action="" method="post">
    <pre>
    prenom  : <input type="text"  value="<?= $tab['prenom'] ?>"  name="prenom"><br><br>
    nom     : <input type="text" value="<?= $tab['nom'] ?>"  name="nom"><br><br>
    photo   : <input type="file" value="<?= $tab['photo'] ?>"  name="photo"/><br><br>
    <td><img src ="<?= $tab["photo"] ?>"  alt ='photo'/></td>
    age     : <input type="text"value="<?= $tab['age'] ?>"  name="age"><br><br>

    <button type='submit' name='submit'>update</button>
    <pre>
</form>