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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idm = $_POST['idm'] ?? null;
        $courriel = $_POST['courriel'] ?? null;
        $motPasse = $_POST['pass'];
        $confirmerMotPasse = $_POST['confirmerpass'];

        if (!$idm || !$courriel) {
            die("Requete invalide. Manque idm ou courriel.");
        }

        if ($motPasse === $confirmerMotPasse) {
            $requete = $bd->prepare("INSERT into connexion(idm, courriel, pass)
            VALUES (:idm, :courriel, :pass)");
            $requete->execute(array(
                'idm' => $idm,
                'courriel' => htmlspecialchars($courriel),
                'pass' => password_hash($motPasse, PASSWORD_DEFAULT)
                
            ));
            echo "Mot de passe enregistré avec succès";
        } else {
            echo "Les mots de passe ne correspondent pas";
        }
    }

?>