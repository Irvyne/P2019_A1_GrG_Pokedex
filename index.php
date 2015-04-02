<?php

require 'bootstrap.php';

$pokemons = findAllPokemons($link);

include 'template/pokemons.php';
