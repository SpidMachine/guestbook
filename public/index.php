<?php

include "../src/autoload.php";

include "../config/config.php"; 

$table = new Model\DbTable(
    new mysqli(
        $config['mysql']['host'],
        $config['mysql']['user'],
        $config['mysql']['password'],
        $config['mysql']['database']
    ),
    $config['mysql']['table']
);

$table->add(['text' => 'Hello', 'name' => 'Vasya']);
$table->get();
print_r($table->get());
