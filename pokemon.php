<?php

require 'bootstrap.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: index.php');
}

$pokemon = findOnePokemon($link, $id);

include 'template/pokemon.php';