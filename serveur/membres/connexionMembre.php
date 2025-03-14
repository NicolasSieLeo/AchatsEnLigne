<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>

  <link href="/laboEtape1TEST/client/utilitaires/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/laboEtape1TEST/client/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <?php include __DIR__ . '/../../client/css/style.php'; ?>

</head>
<body>
<?php include __DIR__ . '/../../navbar.php'; ?>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "123456";
  $dbname = "bdboutique";

  try {
      $bd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      echo 'Erreur de connexion: ' . $e->getMessage();
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $courriel = $_POST['courriel'];
      $motDePasse = $_POST['pass'];

      $requete = $bd->prepare("SELECT * FROM connexion WHERE courriel = :courriel AND pass = :pass");
      $requete->bindParam(':courriel', $courriel);
      $requete->bindParam(':pass', $motDePasse);
      $requete->execute();

      $result = $requete->fetch(PDO::FETCH_ASSOC);

      if ($result) {
          // Vérification du rôle
          if ($result['role'] === 'A') {
              header("Location: admin.php");
              exit();
          } else if ($result['role'] === 'M') {
              header("Location: membre.php");
              exit();
          } else {
              echo "<p class='text-center mt-3 text-danger'>Role inconnu. Vérifiez vos informations.</p>";
          }
      } else {
          echo "<p class='text-center mt-3 text-danger'>Connexion échouée! Vérifiez vos informations.</p>";
      }
  }
  ?>
  <div class="container-form">
    <div class="card">
      <h2>Connexion</h2>
      <form method="post" action="">
        <div class="form-group mb-3">
          <label for="courriel" class="form-label">Courriel</label>
          <input type="text" name="courriel" class="form-control" placeholder="Courriel" required>
        </div>
        <div class="form-group mb-3">
          <label for="pass" class="form-label">Mot de passe</label>
          <input type="password" name="pass" class="form-control" placeholder="Mot de passe" required>
        </div>
        <button type="submit" class="btn btn-primary">
          <i class="fa-solid fa-right-to-bracket"></i> Se connecter
        </button>
      </form>
    </div>
  </div>
  <footer class="text-center py-4" style="background-color: #f5f5dc;">
  <div class="container-fluid">
    <h5 class="mb-1">Magasin Belle Bottines</h5>
    <p class="mb-1">Adresse : Montréal, Rue des Ormes, H3R1Z3</p>
    <p class="mb-2">Téléphone : (514) 123-4567</p>
    <div>
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
</footer>


  <script src="/laboEtape1TEST/client/utilitaires/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
