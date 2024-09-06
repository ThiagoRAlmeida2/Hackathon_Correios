<?php

$updateMessage = "";

$host = "localhost";
$user = "root";
$pass = "";
$bd = "Correios";

$conn = new mysqli($host, $user, $pass, $bd);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>