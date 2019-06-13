<?php
require_once'conexao.php';
require_once'load.php';
if(isset($_COOKIE['id_user'])){
    $id = $_COOKIE['id_user'];
    $res = mysqli_query($con,"SELECT * FROM `usuarios` WHERE `ID`= '$id'")
    or die(mysqli_error($con));
    $rest = mysqli_fetch_assoc($res);
    $idx = $rest['ID'];
    if ($idx == 1){
        header("Location: tabela.php");
    }
}else{
    header("Location: index.html");  
}
?> 
<html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Pagina</title>
        <link href="css/page.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    </head>
    <body>
        <div class="page">
            <form method="post" action="recebe_upload.php" enctype="multipart/form-data">
                <h2 style="color:#fff;">Arquivo</h2>
                <input type="text" name="nome" placeholder="Nome do Arquivo"/>
                <input type="file" name="file" />
                <input type="submit" style="margin: 10px;" value="Enviar" onclick="myFunction()" />
                <input type="submit" name="volta" style="margin: 10px;" value="Sair" />
                <div id="msg">Foi enviado com sucesso!</div>
            </form>                
        </div>
    </body>
    <script>
        function myFunction() {
            var x = document.getElementById("msg");
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
    </script>
</html>