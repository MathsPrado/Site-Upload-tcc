<?php

include ('conexao.php');

$nome = $_POST['user_name'];

$login = $_POST['user_login'];

$senha = $_POST['user_pass'];

$curso = $_POST['user_curso'];

$email = $_POST['user_email'];


$in = mysqli_query($conexao,"insert into usuarios (NOME, CURSO, LOGIN, SENHA, EMAIL)
    values ('$nome','$curso','$login','$senha','$email')");

header("location: login.php");





?>