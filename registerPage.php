<?php 
session_start();
include('./connexion.php');
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        
        // $regex = '/^[a-zA-Z0-9._-]+\@[a-zA-Z0-9._-]+\.[a-zA-Z]{2-4}$/';

        // if (preg_match($regex, $email)) {
            if(empty($nickname) || empty($email) || empty($password)){
                echo "<h1>RECOMMENCE ET AVEC TOUT</h1>";
            } 
            elseif(isset($nickname) && isset($email) && isset($password)){
                if (strlen($password) < 9) {
                    echo "<h1>LE MOT DE PASSE DOIT CONTENIR PLUS DE 9 CARACTERES</h1>";
                }   
                else {
                    $query = "SELECT * FROM users WHERE pseudo = '$nickname' OR email = '$email'";
                    $result = $connexion->query($query);
                    if($result->num_rows > 0){
                        echo "<h1>MEME PSEUDO OU EMAIL QUE QUELQU'UN D'AUTRE</h1>";
                    } 
                    else {
                        $_SESSION['nickname'] = $nickname;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        $stmt = $connexion->prepare("INSERT INTO users(pseudo, email, password) VALUES (?, ?, ?)");
                        $stmt->bind_param("sss", $nickname, $email, $password);
                        $stmt->execute();
                        header("Location: index.html");
                        // ("Location: index.html");
                    }
                }             
            } 
        // } 
        // else {
        //     echo "<h1>PAS DE SCAM D'EMAIL</h1>";
        // }
    }
?>



<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputNickname1">Pseudonyme</label>
                <input type="text" class="form-control" id="exampleInputNickname1" aria-describedby="NicknameHelp" placeholder="Entrer pseudo" name="nickname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer email" name="email">
                <small id="emailHelp" class="form-text text-muted">On n'ira pas transmettre votre mail hein</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>
