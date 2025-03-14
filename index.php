<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belle Bottines</title>
    <link href="client/utilitaires/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/labo/client/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <style>
    
</style>

</head>
<body>
<script src="client/utilitaires/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #f5f5dc !important;">

    <div id="main-container" class="container mt-5">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="serveur/photos/boot_logo.png" alt="Logo">
            <span>Belle Bottines</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="serveur/membres/inscription.php">
                        <i class="fa-solid fa-user-plus"></i> Devenir Membre
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="serveur/membres/connexionMembre.php">
                        <i class="fa-solid fa-right-to-bracket"></i> Se Connecter
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-envelope"></i> Contactez-nous
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="header-banner">
    <img src="serveur/photos/botte.png" alt="Belle Bottines" class="img-fluid">
</div>

    <div class="container mt-5">
        <div id="card-produits"class=" row justify-content-center">
            <?php
            $produits = [
                ["image" => "serveur/photos/bottes-blanches.jpg", "nom" => "Botte Peacecorps", "desc" => "Botte en faux-cuir blanc.", "prix" => "145.00 $"],
                ["image" => "serveur/photos/bottes-brune-01.jpg", "nom" => "Botte Cigar", "desc" => "Botte brune cuir cubain.", "prix" => "200.00 $"],
                ["image" => "serveur/photos/bottes-bleuMarin.jpg", "nom" => "Botte Minuit", "desc" => "Botte bleue tissue et en cuir.", "prix" => "175.00 $"],
                ["image" => "serveur/photos/bottes-cognac.jpg", "nom" => "Botte Cognac", "desc" => "Botte brune élégante et confortable.", "prix" => "225.75 $"],
                ["image" => "serveur/photos/bottes-noires.jpg", "nom" => "Botte Caporal", "desc" => "Botte en cuir noire d'inspiration militaire.", "prix" => "150.00 $"],
                ["image" => "serveur/photos/sandales-rouge-noire.jpg", "nom" => "Sandale Diablo", "desc" => "Sandale rouge & noire élégante et estivale.", "prix" => "210.25 $"],
                ["image" => "serveur/photos/bottes-blanches-noires.jpg", "nom" => "Botte Zen", "desc" => "Botte en cuir noir & blanc.", "prix" => "190.00 $"],
                ["image" => "serveur/photos/chaussures-brunes.jpg", "nom" => "Botte Noisette", "desc" => "Bottes élégantes en cuir brun.", "prix" => "180.00 $"],
            ];

            foreach ($produits as $produit) {
                echo '
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

                    <div class="card">
                        <img src="'.$produit["image"].'" class="card-img-top" alt="'.$produit["nom"].'">
                        <div class="card-body">
                            <h5 class="card-title">'.$produit["nom"].'</h5>
                            <p class="card-text">'.$produit["desc"].'</p>
                            <p class="card-text"><strong>Prix: '.$produit["prix"].'</strong></p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
    <footer>
  <div class="container-fluid p-0">
    <div class="card text-center border-0">
      <div class="card-body py-4" style="background-color:#f5f5dc;">
        <h5 class="card-title">Magasin Belle Bottines</h5>
        <p class="card-text mb-1">Adresse : Montréal, Rue des Ormes, H3R1Z3</p>
        <p class="card-text">Téléphone : (514) 123-4567</p>
        <div class="mt-3">
          <a href="https://facebook.com" target="_blank" class="text-decoration-none mx-2">
            <i class="fa-brands fa-facebook fa-lg"></i>
          </a>
          <a href="https://instagram.com" target="_blank" class="text-decoration-none mx-2">
            <i class="fa-brands fa-instagram fa-lg"></i>
          </a>
          <a href="https://twitter.com" target="_blank" class="text-decoration-none mx-2">
            <i class="fa-brands fa-twitter fa-lg"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
