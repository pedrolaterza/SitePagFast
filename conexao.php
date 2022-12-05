<?php

$servidor = "sql101.epizy.com";
$usuario = "epiz_32999471";
$senha = "VZ2aSUWigsC";
$dbname = "epiz_32999471_usuariospagfast";



//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// if($conn->connect_errno){
//     echo "erro";
// }
// else{
//     echo "Conexão certa";
// }
// 

mysqli_set_charset($conn,"utf8");

?>