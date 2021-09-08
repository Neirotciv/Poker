<?php
session_start();
include_once("../lib/player.php");

$filename = "../data/online.json";
$users_data_filename = "../data/users_data.json";
$game_data_filename = "../data/game_data.json";

// Username enlevé du fichier online.json
if (file_exists($filename)) {
    $users = json_decode(file_get_contents($filename), true);
    unset($users[array_search($_SESSION["username"], $users)]);
    file_put_contents($filename, json_encode($users));
}

// Suppresion du fichier game_data.json
if (file_exists($game_data_filename)) {
    unlink($game_data_filename);
}

// Suppression du fichier users_data.json
if (file_exists($users_data_filename)) {
    unlink($users_data_filename);
}

// destroy_player($users_data_filename, $_SESSION["username"]);
session_destroy();

header("Location: ../index.php");
?>