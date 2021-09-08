<?php
session_start();
include_once("../libs/player.php");

// Filtres de contrôles
if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    die("Champ username ou password manquant");
}

if (empty($_POST["username"]) || empty($_POST["password"])) {
    die("Username ou password manquant");
}

$username = $_POST["username"];
$password = $_POST["password"];
$users_filename = "../data/users.json";
$users_data_filename = "../data/users_data.json";

if (!file_exists($users_filename)) {
    die("Fichier utilisateur non existant");
}

$data = json_decode(file_get_contents($users_filename));

foreach ($data as $user) {
    if ($username === $user[0] && password_verify($password, $user[1])) {
        $_SESSION["logged"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["all_ready"] = false;

        // Création des données du joueur
        $player = new_player($username);
        save_player($users_data_filename, $player);
        $_SESSION["player"] = $player;

        // Ajout du joueur online
        $users_filename_online = "../data/online.json";
        if (!file_exists($users_filename_online)) {
            file_put_contents($users_filename_online, "[]");
        }

        $users = json_decode(file_get_contents($users_filename_online), true);

        // Définir la place du joueur autour de la table en fonction des joueurs connectés
        update_player_value($users_data_filename, $username, "seat", count($users) + 1);
        
        array_push($users, $username);
        file_put_contents($users_filename_online, json_encode($users));
    }
}

header("Location: ../index.php");
?>