<?php

use Agenda\Model\Contato;

$sql = new Contato();
if (!$sql->deleteById($_REQUEST['id_contato'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
header('Location: /');