<?php

include ('conexao.php');
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

?>