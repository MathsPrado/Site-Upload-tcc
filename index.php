
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login</title>
        <link href="css/page.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    </head>

    <body>
     
        <div class="signin">
                <form action="load.php"  method="POST" > 
                <h2 style="color:#fff;">Bem Vindo</h2>
                <input type="text" name="user_email" placeholder="Email"/><br /><br />
                <input type="password" name="user_senha" placeholder="Senha" /><br /><br />
                <input  type="submit" value="entrar" class="btn btn-dark" name="entrar" /><br /><br />
                <div id="container">
                    <a href="forget.html" style=" margin-left:5px; font-size:13px; font-family:Tahoma, Geneva, sans-serif;">Esqueci minha senha</a>
                </div><br /><br /><br /><br /><br /><br />
                Nenhuma conta? 
                <a href="signup.html" style="font-family:'Play', sans-serif;">&nbsp;Crie uma!</a>
            </form>
        </div>
    </body>
</html>
