<?php
// Création d'un nouveau joueur
function new_player($username) {
    $player = [
        "name" => $username,
        "is_ready" => "false",
        "served" => "false",
        "positioned" => "false",
        "position" => 0,
        "seat" => 0,
        "cards" => [], // Cartes en main
        "stack" => 100, // Solde de départ
        "already_bet" => 0, // A déjà misé
        "remains_to_bet" => 0, // Reste à misé
    ];

    return $player;
}

// Sauvegarde du joueur dans un fichier
function save_player($filename, $player) {
    if (!file_exists($filename)) {
        file_put_contents($filename, "[]");
    }

    $data = json_decode(file_get_contents($filename), true);
    array_push($data, $player);
    file_put_contents($filename, json_encode($data));
}

// Chargement du joueur dans un fichier
function load_player($filename) {
    if (file_exists($filename)) {
        return json_decode(file_get_contents($filename), true);
    }
    return false;
}

// Mise à jour d'une valeur du joueur (clé => valeur)
function update_player_value($filename, $player_name, $update_key, $new_value) {
    if (file_exists($filename)) {
        $data = json_decode(file_get_contents($filename), true);
        
        foreach ($data as $key => $player) {
            if ($player["name"] === $player_name) {
                $data[$key][$update_key] = $new_value;
                file_put_contents($filename, json_encode($data));
            }
        }
    }
}
?>