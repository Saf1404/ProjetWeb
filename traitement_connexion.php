<?php
session_start();

include 'utilisateurs.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST["pseudo"];
    $motdepasse = $_POST["motdepasse"];

    foreach ($utilisateurs as $utilisateur) {
        if ($utilisateur['pseudo'] === $pseudo && password_verify($motdepasse, $utilisateur['motdepasse'])) {
            $_SESSION["pseudo"] = $pseudo;
            header("Location: index.php");
            exit();
        }
    }

    $erreur = "Pseudo ou mot de passe incorrect.";
}
?>
