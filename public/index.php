<?php

require __DIR__ . '/../vendor/autoload.php';

use Agenda\Connection;

$connection = Connection::Conn();

$contato = $connection->query("select * from contato")->fetchAll();

print '<pre>';
print_r($contato);