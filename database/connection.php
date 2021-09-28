<?php

$host = "localhost";
$db = "bancoagenda";
$user = "root";
$pass = "";

try{
$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user, $pass);


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    $error = $e->getMessage();
    echo "Erro: $error";
}


