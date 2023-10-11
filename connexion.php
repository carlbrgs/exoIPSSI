<?php

// $connexion = new mysqli("localhost", "root", "", "myDB");

// if (!$connexion -> connect_error){
//     printf("Erreur : Connexion impossible : ". $connexion->connect_error);
//     exit();
// }
// printf("Succès de la connexion !");

$host = "localhost";
$port = "3306";
$dbname = "myDB";
$usermane = "root";
$password = "pass";

try {
    $conn = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$dbname, $username, $password);
}
catch(PDOException $except){
    printf("Echec de la connexion");
}


?>