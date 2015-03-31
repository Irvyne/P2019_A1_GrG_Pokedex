<?php

function findAllPokemons($link) {
    $sql   = "SELECT * FROM pokemon";
    $query = mysqli_query($link, $sql);
    var_dump($query);
}
