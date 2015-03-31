<?php

require 'config/parameters.php';

$link = mysqli_connect(
    $parameters['hostname'],
    $parameters['username'],
    $parameters['password'],
    $parameters['dbname'],
    $parameters['port']
);

var_dump($link);