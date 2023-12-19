<?php
require("connixion.php");



if(isset($_POST['submit']) &&  !empty($_POST['nom']) ){
    $req=$con->prepare("delete from client where nom =?");
    $req->execute([$_POST['nom']]);
    header("location:aficher.php");
 
}

?>
   
   
   <form action=""  method='post'>
        nom:  <input type="text" name="nom"/>
        <button type="submit" name='submit'> supp  </button>
    </form>