<?php

$connexion = new mysqli("localhost", "root", "", "bddsite");

if ($connexion -> connect_error){
    printf("Erreur : Connexion impossible : ". $connexion->connect_errno);
    exit();
}

// $host = "localhost";
// $port = "3306";
// $dbname = "bddsite";
// $usermane = "root";
// $password = "";

// try {
//     $conn = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$dbname, $username, $password);
// }
// catch(PDOException $except){
//     printf("Echec de la connexion");
// }
?>