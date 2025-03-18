<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdboutique";

    try {
        $bd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Connexion réussie';
    } catch (PDOException $e) {
        echo 'Erreur de connexion: ' . $e->getMessage();
    }

    if (isset($_POST['ok'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $courriel = $_POST['courriel'];
        $sexe = $_POST['sexe'];
        $datenaissance = $_POST['datenaissance'];
        $mdp = $_POST['pass'];
        $confirm_mdp = $_POST['confirm_pass'];

        $requete = $bd->prepare("INSERT INTO membres(nom, prenom, courriel, sexe, datenaissance) VALUES (:nom, :prenom, :courriel, :sexe, :datenaissance)");
        $requete->execute(array(
            'nom' => htmlspecialchars($nom),
            'prenom' => htmlspecialchars($prenom),
            'courriel' => htmlspecialchars($courriel),
            'sexe' => htmlspecialchars($sexe),
            'datenaissance' => htmlspecialchars($datenaissance)
        ));

        $last_idm = $bd->lastInsertId();

        $hashMdp = password_hash($mdp, PASSWORD_DEFAULT);

        header("Location: enregistrerMdp.php?courriel=$courriel&idm=$last_idm&pass=$hashMdp");
    }

?>