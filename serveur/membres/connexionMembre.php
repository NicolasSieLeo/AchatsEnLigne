<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <link href="../../client/utilitaires/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../client/css/style.php">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>

<!-- NAVBAR -->
<?php include __DIR__ . '/../../navbar.php'; ?>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bdboutique";

  try {
      $bd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      echo 'Erreur de connexion: ' . $e->getMessage();
  }
  if (isset($_POST['ok'])) {
      $courriel = $_POST['courriel'];
      $motDePasse = $_POST['pass'];

      // Debugging: Print submitted form data
      echo "<pre>";
      print_r($_POST);
      echo "</pre>";

      $requete = $bd->prepare("SELECT * FROM connexion WHERE courriel = :courriel");
      $requete->bindParam(':courriel', $courriel);
      $requete->execute();

      $result = $requete->fetch(PDO::FETCH_ASSOC);

      // Debugging: Print the database result
      echo "<pre>";
      print_r($result);
      echo "</pre>";

      if ($result) {
        if (password_verify($motDePasse, $result["pass"])) {
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
            echo "<p class='text-center mt-3 text-danger'>Mot de passe incorrect.</p>";
        }
      } else {
          echo "<p class='text-center mt-3 text-danger'>Aucun utilisateur trouvé avec ce courriel.</p>";
      }
  }
  ?>
  <div class="container-form">
    <div class="card">
      <h2>Connexion</h2>
      <form method="post" action="">
        <div class="form-group mb-3">
          <label for="courriel" class="form-label">Courriel</label>
          <input type="text" name="courriel" id="courriel" class="form-control" placeholder="Courriel" required>
        </div>
        <div class="form-group mb-3">
          <label for="pass" class="form-label">Mot de passe</label>
          <input type="password" name="pass" id="pass" class="form-control" placeholder="Mot de passe" required>
        </div>
        <button type="submit" name="ok" class="btn btn-primary">
          <i class="fa-solid fa-right-to-bracket"></i> Se connecter
        </button>
      </form>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include __DIR__ . '/../../footer.php'; ?>


  <script src="/laboEtape1TEST/client/utilitaires/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
