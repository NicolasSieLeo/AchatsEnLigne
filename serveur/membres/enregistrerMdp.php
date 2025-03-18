<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdboutique";

    try {
        $bd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    } catch (PDOException $e) {
        echo 'Erreur de connexion: ' . $e->getMessage();
    }

    // À FAIRE : programmer les conditions demandées pour valider les mots de passe

    
    $idm = $_GET['idm'] ?? null;
    $courriel = $_GET['courriel'] ?? null;
    $motPasse = $_GET['pass'] ?? null;

    if (!$idm || !$courriel || !$motPasse) {
        die("Requete invalide. Manque idm ou courriel.");
    }

    $requete = $bd->prepare("INSERT into connexion(idm, courriel, pass)
    VALUES (:idm, :courriel, :pass)");
    $requete->execute(array(
        'idm' => $idm,
        'courriel' => htmlspecialchars($courriel),
        'pass' => $motPasse
    ));
    
    echo "Mot de passe enregistré avec succès!";

?>