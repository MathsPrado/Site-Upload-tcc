<?php
require_once 'conexao.php';
if (isset($_POST['entrar'])) {
    $usEmail = $_POST['user_email'];
    $usSenha = $_POST['user_senha'];
    $entrar = $_POST['entrar'];
    validaUsuario($entrar,$usEmail,$usSenha,$con);
}

function expressEnvia($caminho){
    
}
?>