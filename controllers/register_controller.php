<?php
if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    die("Champ username ou password manquant");
}

if (empty($_POST["username"]) || empty($_POST["password"])) {
    die("Username ou password manquant");
}

$username = $_POST["username"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$user = [$username, $password];
$filename = "../data/users.json";

if (!file_exists($filename)) {
    file_put_contents($filename, "[]");
}

$data = json_decode(file_get_contents($filename));
array_push($data, $user);

file_put_contents($filename, json_encode($data));

header("Location: ../index.php");
?>