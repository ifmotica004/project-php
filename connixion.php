<?php

try{
    $con= new PDO("mysql:host=localhost;dbname=efmphp",'root','');
    echo "conixion";
}
catch(PDOException $e){
    echo $e->getMessage();
}



?>