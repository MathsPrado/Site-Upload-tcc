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
        $pega_id = mysqli_num_rows(mysqli_query($con,"SELECT `id` FROM `usuarios` WHERE `email` = '$email'"));
        $verifica = mysqli_query($con,"SELECT `email`,`senha` FROM `usuarios` WHERE `email` = 
        '$email' AND `senha` = '$senha'") or die("erro ao selecionar");
          if (mysqli_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='index.html';</script>";
            header("Location:index.html");
            die();
          }else{
            setcookie("login",$email);
            setcookie("id_user",$pega_id);
            header("Location: pagina.php");
          }
      }
    
}

function enviaPdf($id,$caminho,$con)
{
  $result = mysqli_query($con,"SELECT `nome` FROM `usuarios` WHERE `ID_Usuario`= '$id'");
  $linha = mysql_num_rows($result);
  for ($i=0;$i<$linha;$i++)
  {
  $reg = mysql_fetch_row($result);
  echo $reg;
  }
  mysqli_query($con,"INSERT INTO `arquivos`(`ID_Usuario`, `nome`, `caminho_local`) 
  VALUES ('$id','$reg[0]','$caminho')");
}



    
?>