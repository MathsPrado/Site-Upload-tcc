<?php   

$con=mysqli_connect("localhost","root","","php");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

function novoUsuario($nome,$senha,$curos,$email){
    mysqli_query($con,"INSERT INTO `usuarios`(`senha`, `nome`, `curso`, `email`)
    VALUES ($senha,$nome,$curso, $email)");

    mysqli_close($con);
}

mysqli_query($con,"SELECT * FROM usuarios");

    
?>