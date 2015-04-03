<?php

require 'bootstrap.php';

if (!empty($_POST['submit'])) {
    $name      = $_POST['name'];
    $hp        = $_POST['hp'];
    $level     = $_POST['level'];
    $evolution = $_POST['evolution'];
    $picture   = $_FILES['picture'];
    $error     = [];

    if (empty($name) && empty($hp) && empty($level)) {
        $error[] = 'Les champs "Nom", "Hp" et "Level" sont obligatoires!';
    }
    if ($picture['error'] == 4) {
        $picture = null;
    } elseif ($picture['error'] != 0) {
        $error[] = 'Une erreur s\'est produite sur l\'upload de l\'image';
    }

    if (empty($error)) {
        if ($picture != null) {
            move_uploaded_file($picture['tmp_name'], __DIR__.'/upload/'.$picture['name']);
            $picture = $picture['name'];
        }
        if (createPokemon($link, $name, $hp, $level, $evolution, $picture) == false) {
            $error[] = 'Erreur lors de la création du pokémon : '.mysqli_error($link);
        }
    }
}

var_dump($_POST, $_FILES);

include 'template/create_pokemon.php';