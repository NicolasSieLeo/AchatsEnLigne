<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir un mot de passe</title>
</head>
<body>
    <header>
        <form action="enregistrerMdp.php" method="post">
            <input type="hidden" name="courriel" value="<?php echo htmlspecialchars($_GET['courriel']); ?>">
            <input type="hidden" name="idm" value="<?php echo htmlspecialchars($_GET['idm']); ?>">
            <input type="hidden" name="mdp"value="<?php echo htmlspecialchars($_GET['pass']); ?>">
            <label for="pass">Mot de passe</label>
            <input type="password" name="pass" placeholder="Mot de passe" required> <br  />
            <label for="confirmerpass">Confirmer le mot de passe</label>
            <input type="password" name="confirmerpass" placeholder="Confirmer le mot de passe" required> <br  />
            <input type="submit" value="Enregistrer le mot de passe">
        </form>
    </header>
</body>
</html>