<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: aluno.php');
}
$login = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aluns.css">
    <link
      rel="shortcut icon"
      href="css/imgs/school-svgrepo-com.svg"
      type="image/x-icon"
    />
    <style>
            h2{
        font-family: "Manrope", sans-serif;
        background: -webkit-linear-gradient(#198cb5, #5338b5);
        background: linear-gradient(#198cb5, #5338b5);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: #5338b5;
        text-align: center;
        font-size: 5.2vh;
        }
        #sub {
        font-family: "Manrope", sans-serif;
        text-decoration: none;
        background: white;
        border: #df2107 3px solid;
        padding: 0.8vh 10vh;
        text-align: center;
        cursor: pointer;
        transition: all 0.5s;
        font-size: 5vh;
        color: #df2107;
        box-shadow: 3px 3px 2px;
        }

        #sub:hover {
        background: #df2107;
        color: white;
        border: #df2107 3px solid;
        }
    </style>
    <title>Sistema</title>
</head>
<body>
    <main>
    <h1>Inicio de sessão</h1>
    <?php
    echo "<h2>Seja bem vindo<br> $login</h2>";
    ?>
    <a href="exit.php" id="sub">sair</a>    
</main>
</body>
</html>