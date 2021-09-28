<?php

session_start();

include_once("/xampp/htdocs/paranga-study/database/connection.php");
$user = [];
$query = "SELECT * FROM contato";
$stmt = $conn->prepare($query);
$stmt->execute();
$user = $stmt->fetchAll(); 
