<?php
session_start();

$fichier_utilisateurs = 'utilisateurs.php';
if (!file_exists($fichier_utilisateurs)) {
    file_put_contents($fichier_utilisateurs, '<?php $utilisateurs = array(); ?>');
}

include $fichier_utilisateurs;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST["pseudo"];
    $motdepasse = $_POST["motdepasse"];

    foreach ($utilisateurs as $utilisateur) {
        if ($utilisateur['pseudo'] === $pseudo) {
            $erreur = "Ce pseudo est déjà utilisé. Veuillez en choisir un autre.";
            break;
        }
    }

    if (!isset($erreur)) {
        $nouvel_utilisateur = array(
            'pseudo' => $pseudo,
            'motdepasse' => password_hash($motdepasse, PASSWORD_DEFAULT)
        );
        $utilisateurs[] = $nouvel_utilisateur;

        file_put_contents($fichier_utilisateurs, '<?php $utilisateurs = ' . var_export($utilisateurs, true) . '; ?>');

        header("Location: connexion.php");
        exit();
    }
}
?>
