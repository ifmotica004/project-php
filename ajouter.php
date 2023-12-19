<?php
require("connixion.php");


 


 
if(isset($_POST['submit']) &&  !empty($_POST['nom']) ){
    $reqq='insert into client(prenom,nom,photo,age)   value(?,?,?,?)';

    $req=$con->prepare($reqq);

    $req->execute([$_POST['pre'],$_POST['nom'],$_POST['pho'],$_POST['age']]);
    header("location:aficher.php");
 
}






?>
<form action="" method="post">
    <pre>
    prenom  : <input type="text" name="pre"><br><br>
    nom     : <input type="text" name="nom"><br><br>
    photo   : <input type="file" name="pho"/><br><br>
    age     : <input type="text" name="age"><br><br>

    <button type='submit' name='submit'>Ajouter</button>
    <pre>
</form>