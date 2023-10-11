
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel= "stylesheet" href= "style.css">
    </head>
    <body>
    <div class="navbar">
        <div class="navbar-logo">
            <img src="votre-logo.png" alt="Logo">
            <a href="index.html">Accueil</a>
            <a class="dropbtn" href="#produits">Produits</a>
            <a href="contact.html">Contact</a>
         </div>
         <div>
           <a href="#login">Login</a> 
          </div>
     </div>

        <form action="" method="post">
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


<?php

include('./connexion.php');

if(isset($_POST['email'])){
    $emailInput = $_POST['email'];
    $pswInput =  $_POST['password'];

    $sql = "SELECT pseudo, email, password FROM users WHERE email = '$emailInput'";
    $resultat = $mysqli->query($sql);
    
    // Vérification et comparaison du mot de passe
    if ($resultat) {
        if ($resultat->num_rows > 0) {
            $row = $resultat->fetch_assoc();
            $passwordFromDatabase = $row['password'];
            $pseudo = $row['pseudo'];

            if ($passwordFromDatabase == $pswInput) {
                header("Location: index.html?user=".urlencode($pseudo));
                exit();
            } else {
                echo "Mot de passe incorrect";
            }
        } else {
            echo "Aucun utilisateur trouvé avec cet e-mail.";
        }
    } else {
        echo "Erreur de requête : " . $mysqli->error;
    }
    $mysqli->close();
}


?>