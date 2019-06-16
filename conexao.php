<?php   

$con=mysqli_connect("localhost","root","","php");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

function novoUsuario($con,$nome,$senha,$curso,$email){
    mysqli_query($con,"INSERT INTO `usuarios`(`SENHA`, `NOME`, `CURSO`, `EMAIL`)
    VALUES ('$senha','$nome','$curso', '$email')");
    header("Location:cong.html");
}

function validaUsuario($entrar,$email,$senha,$con){
    if (isset($entrar)) {
        $pega_id = mysqli_query($con,"SELECT `ID` FROM `usuarios` WHERE `EMAIL` = '$email'");
        $pega_ag =  mysqli_fetch_assoc($pega_id);
        $verifica = mysqli_query($con,"SELECT `EMAIL`,`SENHA` FROM `usuarios` WHERE `EMAIL` = 
        '$email' AND `SENHA` = '$senha'") or die("erro ao selecionar");
          if (mysqli_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='index.html';</script>";
            header("Location:index.html");
            die();
          }else{
            setcookie("login",$email);
            setcookie("id_user",$pega_ag['ID']);
            header("Location: pagina.php");
          }
      }
    
}

function enviaPdf($id,$caminho,$con){
  $result = mysqli_query($con,"SELECT * FROM `usuarios` WHERE `ID`= '$id'")
  or die(mysqli_error($con));
  $mano = mysqli_fetch_assoc($result);
  $nomex = $mano['NOME'];
  mysqli_query($con,"INSERT INTO `arquivos`(`ID_Usuario`, `NOME`, `CAMINHO_LOCAL`) 
  VALUES ('$id','$nomex','$caminho')")or die(mysqli_error($con));
}

