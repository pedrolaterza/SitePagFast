<?php

session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


$result = mysqli_query($conn,"SELECT COUNT(*) FROM usuarios WHERE email = '$email'");
$row = $result->fetch_row();
if ($row[0] > 0) {
    $_SESSION['msgError'] = "<p style='color:red; margin: 0 0 0 74px'>O e-mail já está em uso, tente outro! </p>";
    header('Location: registerpage.php');

    }else {
        $result_usuario = ("INSERT INTO usuarios (nome,email,senha) VALUES ('$nome','$email','$senha')");
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $_SESSION['msg'] = "<p style='color:blue; margin: 0 0 0 50px'>Conta criada com sucesso! Vá para o Login </p>";
        header ('Location: registerpage.php');
    }

?>