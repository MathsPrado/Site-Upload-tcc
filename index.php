<?php include'conexao.php';?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login</title>
        <link href="css/logn.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    </head>

    <body>
     
        <div class="signin">
                <form action="valida.php"  method="POST" > 
                <h2 style="color:#fff;">Bem Vindo</h2>
                <input type="text" name="user_email" placeholder="Email"/><br /><br />
                <input type="password" name="user_pass" placeholder="Senha" /><br /><br />
                <input  type="submit" value="entrar" class="btn btn-dark" id="entrar" /><br /><br />
                <div id="container">
                    <a href="forget.html" style=" margin-left:5px; font-size:13px; font-family:Tahoma, Geneva, sans-serif;">Esqueci minha senha</a>
                </div><br /><br /><br /><br /><br /><br />
                Nenhuma conta? 
                <a href="signup.html" style="font-family:'Play', sans-serif;">&nbsp;Crie uma!</a>
            </form>
        </div>
    </body>
</html>

<?php
if (isset($_POST['user_email']) && isset($_POST['user_senha'])) {
    $usEmail = $_POST['user_email'];
    $usSenha = $_POST['user_senha'];
    validaUsuario($con,$usEmail,$usSenha);
}
?>
