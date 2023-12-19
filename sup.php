<?php
require('connixion.php');
$req=$con->prepare("delete from client where id=?");
$req->execute([$_GET['id']]);
header("location:aficher.php");



?> 
