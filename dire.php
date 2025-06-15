<?php

$maconnexion = new PDO('mysql:host=localhost;dbname=mmi19x04;charset=utf8', 'mmi19x04', 'mdp');
$pseudo= $_GET['pseudo'];
$message= $_GET['message'];

$req = "INSERT INTO chat VALUES (NULL,'".$pseudo."','".$message."')";
$res = $maconnexion->prepare($req);
$res->execute();


?>