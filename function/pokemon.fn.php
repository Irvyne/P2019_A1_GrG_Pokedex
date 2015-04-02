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
