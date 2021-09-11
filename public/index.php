<?php 
require __DIR__ . '/../vendor/autoload.php';
use Agenda\Connection;

$Conn = Connection::Conn();

$contato = $Conn->query("SELECT * FROM contato")->fetchAll();


// Testando
echo 'Resultado de Busca <br> <hr>';
foreach ($contato as $key => $value) {
    echo "Encontrado Dados de  $value[nome]";
    echo "<br> Usuario:  $value[nome]";
    echo "<br> Email: $value[email]";
    echo "<br> Telefone: $value[telefone]";
    echo "<br> Tipo: $value[id_tipo_contato]";
    echo "<hr><br>";
}