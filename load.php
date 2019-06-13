<?php
require_once 'conexao.php';
if (isset($_POST['entrar'])) {
    $usEmail = $_POST['user_email'];
    $usSenha = $_POST['user_senha'];
    $entrar = $_POST['entrar'];
    validaUsuario($entrar,$usEmail,$usSenha,$con);
}
if(isset($_POST['cadastra'])){
    $usName = $_POST['user_name'];
    $usEmail = $_POST['user_email'];
    $usCurso = $_POST['user_curso'];
    $usPass = $_POST['user_pass'];
    novoUsuario($con,$usName,$usPass,$usCurso,$usEmail);
}
if(isset($_POST['Sair'])){
    session_destroy();
}
function expressEnvia($caminho,$con){
    $usId = $_COOKIE['id_user'];
    enviaPdf($usId,$caminho,$con);
}
?>