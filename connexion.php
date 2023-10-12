<?php

$mysqli = new mysqli("localhost", "root", "", "bddsite");

if ($mysqli -> connect_error){  
    printf("Erreur : Connexion impossible : ". $connexion->connect_errno);
    exit();
}

$createTableUsers = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL)";

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