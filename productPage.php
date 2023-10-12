<!DOCTYPE html>
<html>
    <head>
        <title>contact</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel= "stylesheet" href= "style.css">
        <link id="additional-styles" rel="stylesheet" type="text/css" href="styleProductPage.css" disabled>
        <script defer src="product.js"></script>
      </head>
    <body>
      <div class="navbar">
        <div class="navbar-logo">
            <img src="Images/logo2.png" alt="Logo" width="70px">
            <a href="index.php">Accueil</a>
            <a class="dropbtn" href="productPage.php">Produits</a>
            <a href="contactForm.php">Contact</a>
         </div>
         <div>
            <a href="registerPage.php">S'identifier</a>
            <a href="loginPage.php">Login</a>
          </div>
     </div>
     <input id="searchbar" onkeyup="getVal()" type="text" name="search" placeholder="Whey, Compléments...">
     
     <?php

include ("./connexion.php");

$sql = "SELECT titre, description, image, prix FROM produits";
$resultat =  $mysqli->query($sql);

// Création de la div contenant les produits
echo '<div class="liste-produits">';

// Boucle pour afficher chaque produit
while ($row = mysqli_fetch_assoc($resultat)) {
    echo '<div class="produit-block">';
    echo '<img src="' . $row['image'] . '" alt="' . $row['titre'] . '">';
    echo '<div class= "text-product">';
    echo '<h2 class="title-product">' . $row['titre'] . '</h2>';
    echo '<p><b>' . $row['prix'] . '</b></p>';
    echo '<p class="product-desc">' . $row['description'] . '</p>';
    echo '</div>';
    echo '</div>';
}

// Fermeture de la div contenant les produits
echo '</div>';

echo '<script>';
echo 'document.getElementById("additional-styles").removeAttribute("disabled");';
echo '</script>';

?>
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

