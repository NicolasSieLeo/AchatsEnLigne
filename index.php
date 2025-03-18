<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belle Bottines</title>
    <link rel="stylesheet" href="client/utilitaires/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="client/css/style.php">
</head>
<body>
<script src="client/utilitaires/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . "/navbar.php"?>

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
    
    <?php include __DIR__ . "/footer.php"?>
</body>
</html>
