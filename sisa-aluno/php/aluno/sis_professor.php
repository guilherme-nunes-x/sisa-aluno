<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header(' location: aluno.php');
}
$login = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aluno.css">
    <link
      rel="shortcut icon"
      href="css/imgs/school-svgrepo-com.svg"
      type="image/x-icon"
    />
    <title>Sistema</title>
</head>
<body>
    <main>
    <h1>Inicio de sessão</h1>
    </main>
</body>
</html>