<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '$Resident2x';
$dbName = 'formulario_aluno';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if ($conexao->connect_errno) {
//     echo "Erro ao conectar ao banco de dados: " . $conexao->connect_error;
// } else {
//     echo "Conexão funcional!";
// }
