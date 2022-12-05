<?php

session_start();

require("conexao.php");

$submit = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);
if($submit){
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($email)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD

		
		$result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE email='$email' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if($senha === $row_usuario['senha']){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				
				header("Location: productlist.php");
			}else{
				$_SESSION['msg'] = "<p style='color: red'>Email ou senha incorretos!</p>";
				header("Location: loginpage.php");
			}
		}
	}else{
		$_SESSION['msg'] = "<p style='color: red'>Email ou senha incorretos!</p>";
		header("Location: loginpage.php");
	}
}else{
	$_SESSION['logado'] = 'semLogin';
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: loginpage.php");
}

