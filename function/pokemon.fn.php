<?php

function findAllPokemons($link) {
    $sql      = "SELECT * FROM pokemon";
    $query    = mysqli_query($link, $sql);
    $pokemons = mysqli_fetch_all($query);

    return $pokemons;
}
