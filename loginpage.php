<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/stylelogin.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
            
    
    <title>Login | PagFast</title>

</head>
<body>
    
    <div class="container">
        
        <div class="formstext">
        <h1 class="login-title">Login | <a href="index.php"><span>PagFast</span></a></h1>
                
                <p>Bem-vindo(a) de volta!</p>
        </div>
        
        <?php

            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }

        ?>

        <div class="form-container">

            <form action="valida.php" method="POST">

                    
                        <label for="email"><b>Email</b></label>
                        <input class="inputCacete" type="text" name="email" id="email" required>
                
                        <label for="senha"><b>Senha</b></label>
                        <input class="inputCacete" type="password" name="senha" id="senha" required>
                

                        <input class="submit" type ="submit" name="submit" value="Entrar">
                        <p class="criarConta">Ainda não tem conta? <a href="registerpage.php">Criar conta</a></p>


            </form>


        </div>
    </div>


</body>
</html>

