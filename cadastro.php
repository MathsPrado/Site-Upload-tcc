<?php

include ('conexao.php');

$nome = $_POST['user_name'];


$senha = $_POST['user_pass'];

$curso = $_POST['user_curso'];

$email = $_POST['user_email'];


$in = mysqli_query($conexao,"insert into usuarios (CURSO, EMAIL, NOME, SENHA)
    values ('$curso','$email','$nome','$senha')");

header("location: index.php");





?>