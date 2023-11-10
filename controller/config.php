<?php
function conexao(){
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

if ($conexao == TRUE) {
    return $conexao;
}else {
    echo "Erro ao efetuar conexão com o banco de dados"; //mysqli_connect_error();;
}
}