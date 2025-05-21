<?php
$conn = new mysqli('localhost', 'root', '', 'souzza_db');
if ($conn->connect_error) {
    die('Erro na conexão: ' . $conn->connect_error);
}