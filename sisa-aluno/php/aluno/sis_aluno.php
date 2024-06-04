<?php
session_start();
include_once('../conexao.php');
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: aluno.php');
}
$login = $_SESSION['email'];
$sql = "SELECT * FROM alunos ORDER BY idalunos DESC";

$resultado = $conexao->query($sql);
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
            font-size: 5vh;
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
            color: none;
            border: #df2107 3px solid;
        }
        main{
            margin-top: 0%;
            width: 90%;
            height: auto;
            padding: 1vh;
            gap: 2.5vh;
        }
        table{
            background: none;
            opacity: 0.9 ;
            font-family: "Manrope", sans-serif;
            border-collapse:collapse;
            color: aliceblue;
            height: 58%;
            /* border-radius: 15px; */
            width: 99%;
            border: #198cb5;
            box-shadow: 3px 3px 2px
        }
        th, td{
            padding: 8px;
            border-right: solid #5338b5 1px;
            border-bottom: solid #5338b5 1px;
            text-align: center;
            color:#5338b5;
        }
        h1{
            margin-bottom: .5%;
            margin-top: 0.5%;
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
            <table>
    <tr>
        <th>id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Senha</th>
        <th>Telefone</th>
        <th>Sexo</th>
        <th>Data de nascimento</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Endereço</th>
        <th>...</th>
    </tr>
    <?php
    while($usuarios = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>".$usuarios['idalunos']."</td>";
        echo "<td>".$usuarios['nome']."</td>";
        echo "<td>".$usuarios['email']."</td>";
        echo "<td>".$usuarios['senha']."</td>";
        echo "<td>".$usuarios['telefone']."</td>";
        echo "<td>".$usuarios['sexo']."</td>";
        echo "<td>".$usuarios['data_nasc']."</td>";
        echo "<td>".$usuarios['cidade']."</td>";
        echo "<td>".$usuarios['estado']."</td>";
        echo "<td>".$usuarios['endereco']."</td>";
        echo "<td> Hello </td>";
        echo "</tr>";
    }
    ?>
    </table>

    <a href="exit.php" id="sub">sair</a>    
</main>
</body>
</html>