<?php

//print_r($_REQUEST);
session_start();
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('../conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    //print_r('<br>');
    //print_r('email: '. $email);
    //print_r('<br>');
    //print_r('senha: '. $senha);

    $sql = "SELECT * FROM alunos WHERE email = '$email' and senha = '$senha'";

    $resul = $conexao->query($sql);

    //print_r($resul);

    if(mysqli_num_rows($resul) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header ('location : aluno.php');
    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header ('location: sis_aluno.php');
    }
}