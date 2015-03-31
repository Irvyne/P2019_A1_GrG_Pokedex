<?php

require 'config/parameters.php';
require 'function/pokemon.fn.php';

$link = mysqli_connect(
    $parameters['hostname'],
    $parameters['username'],
    $parameters['password'],
    $parameters['dbname'],
    $parameters['port']
);

$pokemons = findAllPokemons($link);
$pokemon  = findOnePokemon($link, 3);

var_dump($pokemon);

//var_dump(
//    mysqli_error($link)
//);