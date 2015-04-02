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
