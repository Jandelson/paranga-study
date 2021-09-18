<?php

require __DIR__ . '/../vendor/autoload.php';

use Agenda\Connection;
use Agenda\Page;

$connection = Connection::Conn();

$contato = $connection->query("select * from contato")->fetchAll();
Page::view('index', $contato);