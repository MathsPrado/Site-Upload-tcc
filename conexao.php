<?php   

$con=mysqli_connect("localhost","root","","php");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

function novoUsuario($con,$nome,$senha,$curso,$email){
    mysqli_query($con,"INSERT INTO `usuarios`(`senha`, `nome`, `curso`, `email`)
    VALUES ('$senha','$nome','$curso', '$email')");
    header("Location:cong.html");
}

function validaUsuario($entrar,$email,$senha,$con){
    if (isset($entrar)) {
           
        $verifica = mysqli_query($con,"SELECT `email`,`senha` FROM `usuarios` WHERE `email` = 
        '$email' AND `senha` = '$senha'") or die("erro ao selecionar");
          if (mysqli_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='login.html';</script>";
            header("Location:index.html");
            die();
          }else{
            setcookie("login",$email);
            header("Location: pagina.php");
          }
      }
    
}

function enviaPdf($nome,$caminho)
{
    
}



    
?>