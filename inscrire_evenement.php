<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $index = $_POST["index"];
    $pseudo = $_POST["pseudo"];

    $evenements = [];
    if (file_exists('evenements.json')) {
        $evenementsData = file_get_contents('evenements.json');
        if (!empty($evenementsData)) {
            $evenements = json_decode($evenementsData, true);
        }
    }

    if (in_array($pseudo, $evenements[$index]["participants"])) {
        // Désinscription
        $evenements[$index]["participants"] = array_diff($evenements[$index]["participants"], [$pseudo]);
    } else {
        // Inscription
        $evenements[$index]["participants"][] = $pseudo;

        // Désintéresser utilisateur si intéressé
        if (isset($evenements[$index]["interesses"]) && in_array($pseudo, $evenements[$index]["interesses"])) {
            $evenements[$index]["interesses"] = array_diff($evenements[$index]["interesses"], [$pseudo]);
        }
    }

    file_put_contents('evenements.json', json_encode($evenements));
}
?>