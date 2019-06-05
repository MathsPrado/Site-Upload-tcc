<?php   

$con=mysqli_connect("localhost","root","","php");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

function novoUsuario($con,$nome,$senha,$curso,$email){
    mysqli_query($con,"INSERT INTO `usuarios`(`senha`, `nome`, `curso`, `email`)
    VALUES ($senha,$nome,$curso, $email)");

    mysqli_close($con);
}

function validaUsuario($con,$email,$senha){
    $sql = mysqli_query($con,"SELECT `email`,`senha` FROM `usuarios` WHERE `email`='" . $email. "' AND `senha`='" . $senha . "' limit 2");
    if (mysqli_num_rows($sql) == 1) {
        session_start();
        while ($row = mysqli_fetch_assoc($sql)) {
            $_SESSION['sessao_user'] = $row['email'];
            $_SESSION['sessao_senha'] = $row['senha'];
        }
        header("Location: pagina.php");
    } else {
        echo "conta inválida";
    }
}



    
?>