<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link href="/AchatsEnLigne/client/utilitaires/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="/AchatsEnLigne/client/css/style.php">



</head>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const passwordInput = document.querySelector("#mdp");
    const confirmPasswordInput = document.querySelector("#confirm_mdp");
    const submitButton = document.querySelector("form button[type='submit']");
    
    // Création du message d'erreur sous le champ mot de passe
    const passwordMessage = document.createElement("div");
    passwordMessage.classList.add("password-message");
    passwordInput.insertAdjacentElement("afterend", passwordMessage);

    // Fonction pour vérifier la validité du mot de passe
    function validerMdp() {
        const password = passwordInput.value;
        let errors = [];

        if (password.length < 8 ) {
            errors.push("🔴 Au moins 8 caractères");
        }

        if (password.length > 10 ) {
            errors.push("🔴 Mot de passe trop long (max 10 caractères)");
        }

        if (!/[A-Z]/.test(password)) {
            errors.push(" 🔴Une lettre majuscule");
        }
        if (!/[a-z]/.test(password)) {
            errors.push("🔴Une lettre minuscule");
        }
        if (!/[0-9]/.test(password)) {
            errors.push("🔴Un chiffre");
        }
        if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
            errors.push("🔴Un caractère spécial (@, #, $, etc.)");
        }

        if (errors.length > 0) {
            passwordMessage.innerHTML = errors.join("<br>");
            passwordMessage.style.color = "red";
            submitButton.disabled = true;
        } else {
            passwordMessage.innerHTML = " Mot de passe valide !";
            passwordMessage.style.color = "green";
            submitButton.disabled = false;
        }
    }

    // Vérifier si les mots de passe correspondent
    
confirmPasswordInput.addEventListener("input", function() {
    let errorMessage = document.querySelector(".confirm-password-message");

    
    if (errorMessage) {
        errorMessage.remove();
    }

    errorMessage = document.createElement("div");
    errorMessage.classList.add("confirm-password-message");
    confirmPasswordInput.insertAdjacentElement("afterend", errorMessage);

    if (passwordInput.value !== confirmPasswordInput.value) {
        errorMessage.innerHTML = " 🔴Les mots de passe ne correspondent pas !";
        errorMessage.style.color = "red";
        confirmPasswordInput.setCustomValidity("Les mots de passe ne correspondent pas !");
    } else {
        errorMessage.innerHTML = "🟢 Les mots de passe correspondent !";
        errorMessage.style.color = "green";
        confirmPasswordInput.setCustomValidity("");
    }
});


    
    passwordInput.addEventListener("input", validerMdp);
});
</script>



<body>

  <!-- NAVBAR -->
  <?php include __DIR__ . '/../../navbar.php'; ?>



  <!-- Contenu principal : Formulaire d'inscription -->
  <div class="container-form">
    <div class="card p-5 shadow-lg rounded-4 w-50 mx-auto">
      <h2 class="text-center mb-4">Inscription</h2>
      <form action="enregistrerMembre.php" method="post">
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom" required>
        </div>
        <div class="mb-3">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prénom" required>
        </div>

       
        <div class="mb-3">
          <label for="courriel" class="form-label">Courriel</label>
          <input type="email" class="form-control" name="courriel" placeholder="Entrez votre courriel" required>
        </div>

       
        <div class="mb-3">
          <label class="form-label">Sexe :</label>
          <div class="d-flex gap-3">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sexe" id="sexeM" value="M">
              <label class="form-check-label" for="sexeM">Masculin</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sexe" id="sexeF" value="F">
              <label class="form-check-label" for="sexeF">Féminin</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sexe" id="sexeAutre" value="N">
              <label class="form-check-label" for="sexeAutre">Autre</label>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="datenaissance" class="form-label">Date de naissance</label>
          <input type="date" class="form-control" name="datenaissance" required>
        </div>
        <div class="mb-3">
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Entrez un mot de passe" required>
        </div>

        <div class="mb-3">
            <label for="confirm_mdp" class="form-label">Confirmation du mot de passe</label>
            <input type="password" class="form-control" name="confirm_mdp" id="confirm_mdp" placeholder="Confirmez le mot de passe" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">
          <i class="fa-solid fa-user-plus"></i> S'inscrire
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

  <script src="/AchatsEnLigne/client/utilitaires/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
