<?php

// $connexion = new mysqli("localhost", "root", "", "myDB");

// if (!$connexion -> connect_error){
//     printf("Erreur : Connexion impossible : ". $connexion->connect_error);
//     exit();
// }
// printf("Succès de la connexion !");

// $host = "localhost";
// $port = "3306";
// $dbname = "myDB";
// $usermane = "root";
// $password = "";

// try {
//     $conn = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$dbname, $username, $password);
// }
// catch(PDOException $except){
//     printf("Echec de la connexion");
// }

// $request 

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "bddsite");

// Requête non préparée
// $mysqli->query("DROP TABLE IF EXISTS test");
// $mysqli->query("CREATE TABLE test(id INT, label TEXT)");

// Requête préparée, étape 1 : préparation
$stmt = $mysqli->prepare("INSERT INTO users(pseudo, email, password) VALUES (?, ?, ?)");

// Requête préparée, étape 2 : lie les valeurs et exécute la requête

// $label = 'PHP';
$pseudo = "TEST3345";
$email = "TEST2643353";
$mdp = "TEST4563673";
$stmt->bind_param("sss", $pseudo, $email, $mdp); // "is" means that $id is bound as an integer and $label as a string

$stmt->execute();

?>