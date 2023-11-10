<?php

session_start();

require_once "../controller/config.php";
$conexao = conexao();
if ($conexao == FALSE) {
    DIE;
}
//  $2y$10$Y9wdXzod3kFe2Vjq9SMoQ.Ih3zdE0yRAYaxXIBM1mVsxg3a4O0H.O
// 123 

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $query = mysqli_query($conexao,$sql);
    if (mysqli_num_rows($query) > 0) {
        $banco = mysqli_fetch_assoc($query);
        if (password_verify($senha,$banco['senha'])) {
$_SESSION['email'] = $email;
$_SESSION['id'] = $banco['id_usuario'];
        }else {
            $_SESSION['msg'] = "Informações invalidas";
            $_SESSION['alert'] = "alert-danger";
            header("location:../index.php");
            die;
        }
    }else {
        $_SESSION['msg'] = "Não existe usuário com este nome";
        $_SESSION['alert'] = "alert-danger";
        header("location:../index.php");
        die;
    }
}else{
    header("location:../index.php");
    die;
}




?>