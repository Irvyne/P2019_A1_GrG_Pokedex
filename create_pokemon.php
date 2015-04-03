<?php

require 'bootstrap.php';

// TODO Validate form

var_dump(
    createPokemon($link, 'Magicarpe', 3, 100)
);

var_dump(
    mysqli_error($link)
);