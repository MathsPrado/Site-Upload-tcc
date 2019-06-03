<?php

include ('conexao.php');
<<<<<<< HEAD
class Controle{
    private $nome, $senha, $curso, $email;

    public function criacao(){
        $in = "INSERT INTO `usuarios`(`senha`, `nome`, `curso`, `email`)
        VALUES ('$this->senha','$this->nome','$this->curso','$this->email')";
        conect($in);
    }
    public function update(){
        
    }
}
=======

$nome = $_POST['user_name'];


$senha = $_POST['user_pass'];

$curso = $_POST['user_curso'];

$email = $_POST['user_email'];


$in = mysqli_query($conexao,"insert into usuarios (CURSO, EMAIL, NOME, SENHA)
    values ('$curso','$email','$nome','$senha')");

header("location: index.php");




>>>>>>> df8e2e31e0e55ec794a3acb92bcf1673bab0cef4

?>