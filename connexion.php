<?php
// $connexion = new mysqli("localhost", "root", "", "myDB");

// if (!$connexion -> connect_error){
//     printf("Erreur : Connexion impossible : ". $connexion->connect_error);
//     exit();
// }
// printf("Succès de la connexion !");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "bddsite");
?>