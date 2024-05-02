<?php
if(isset($_POST['submit']))
{

include_once('../conexao.php');

$nome = $_POST['nome'];
$email =$_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$data_nasc = $_POST['data'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$resul = mysqli_query($conexao, "INSERT INTO alunos(nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco) 
VALUES('$nome', '$email', '$senha', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");


}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/aluno.css" />
    <link
      rel="shortcut icon"
      href="css/imgs/school-svgrepo-com.svg"
      type="image/x-icon"
    />
    <title>Inicial</title>
  </head>
  <body>
    <section>
      <h1>Inscrever Aluno</h1>

      <form action="ins_aluno.php" method="post">
        <div id="vs">
          <form action="lista-aluno.php" method="post">
            <label for="nome">Nome aluno</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome" required>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite o email" required>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Crie sua senha" required>
            <label for="telefone">telefone</label>
            <input type="tel" name="telefone" id="telefone" placeholder="Digite o telefone" required>
            <label for="sexo">sexo</label>
            <input type="text" name="sexo" id="sexo" placeholder="Digite seu sexo" required>
            <label for="data">data de nascimento</label>
            <input type="date" name="data" id="data" placeholder="Digite sua data de nascimento" required>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" placeholder="Digite a cidade" required>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" placeholder="Digite seu estado" required>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereco" required>
            <label for="submit"></label>
        </div>
        <div id="suv">
          <label for="submit"></label>
          <input type="submit" value="Entrar" id="sub" name="submit"/>
        </div>
      </form>
    </section>
  </body>
</html>
