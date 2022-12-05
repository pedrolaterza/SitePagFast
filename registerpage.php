<?php
session_start();
require_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/styleregister.css" type="text/css">
         
    
    <title>Cadastro | PagFast</title>

</head>
<body>
    <div class="container">
        <div class="form-container">

            <form name="register" action="processa.php" method="POST">

                <h1 class="login-title">Registro | <a href="index.php"><span>PagFast</span></a></h1>
                <br>
                <p class="startUsing">Comece a usar a máquina do futuro!</p>
                <br>

                <?php

                    if(isset($_SESSION['msgError'])){
                        echo $_SESSION['msgError'];
                        unset ($_SESSION['msgError']);
                        }

                ?>

                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset ($_SESSION['msg']);

                }

                ?>
                
                
                        <label for=""><b>Nome</b></label>
                        <input type="text" name="nome" id="nome" required>

                        <label for=""><b>Email</b></label>
                        <input type="text" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Preencha com um email válido">

                        <label for=""><b>Senha</b></label>
                        <input type="password" name="senha" id="senha" required minlength="8" title="A senha deve conter no mínimo uma letra minúscula e maíuscula, um número e um caracter especial">
                

                <button class="submit" type="submit" id="submit" name="submit">Criar</button>
                <p class="criarConta">Já tem uma conta? <a href="loginpage.php">Logar</a></p>


            </form>


        </div>
    </div>
</body>
</html>