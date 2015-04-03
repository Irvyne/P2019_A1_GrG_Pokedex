<?php

function findAllPokemons($link) {
    $sql      = "SELECT * FROM pokemon";
    $query    = mysqli_query($link, $sql);
    $pokemons = mysqli_fetch_all($query, MYSQLI_ASSOC);

    return $pokemons;
}

function findOnePokemon($link, $id) {
    $sql     = "SELECT * FROM pokemon WHERE id=".$id;
    $query   = mysqli_query($link, $sql);
    $pokemon = mysqli_fetch_assoc($query);

    return $pokemon;
}

function createPokemon($link, $name, $hp, $level, $evolution = null, $picture = null) {
    $sql   = "INSERT INTO pokemon (name, hp, level, evolution_id, picture) VALUES ('$name', '$hp', '$level', ".(null === $evolution ? "NULL" : $evolution).", ".(null === $picture ? "NULL" : "'".$picture."'").")";
    var_dump($sql);
    $query = mysqli_query($link, $sql);

    return $query;
}
