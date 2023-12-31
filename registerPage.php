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
        <form action="" method="post">
        <div class="navbar">
        <div class="navbar-logo">
            <img src="Images/logo2.png" alt="Logo" width="70px">
            <a href="index.php">Accueil</a>
            <a class="dropbtn" href="productPage.php">Produits</a>
            <a href="contactForm.php">Contact</a>
         </div>
         <div>
           <a href="registerPage.php">Inscription</a>
           <a href="loginPage.php">Se connecter</a> 
          </div>
     </div>
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

        <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: #007bff"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Inscrivez vous à notre newsletter</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">MYWhey</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #007bff; height: 2px"
                />
            <p>
              Nous vous proposons une large gamme de compléments alimentaires afin de vouis accompagner dans vos objectifs du mieux que l'on peut
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Nos valeurs</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #007bff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Respect</a>
            </p>
            <p>
              <a href="#!" class="text-white">Qualité</a>
            </p>
            <p>
              <a href="#!" class="text-white">Rapidité</a>
            </p>
            <p>
              <a href="#!" class="text-white">Compréhensif</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Liens utiles</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #007bff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Votre compte</a>
            </p>
            <p>
              <a href="#!" class="text-white">CGV</a>
            </p>
            <p>
              <a href="#!" class="text-white">Politique de vente</a>
            </p>
            <p>
              <a href="#!" class="text-white">FAQ</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #007bff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> contact@mywhey.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
    </body>
</html>
