<?php

$servidor = "localhost";
$usuario = "root";
$senha  =  "";
$dbname = "hd_project";

//criar conexão

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conexao){
    die("Falha na conexão: " . mysqli_connect_error());
}else{
    //echo "Conexão realizada com sucesso!"
}
?>