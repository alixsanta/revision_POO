<?php
    $bdd = new PDO('mysql:host=localhost;dbname=articles', 'root','', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>