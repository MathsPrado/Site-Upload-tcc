 <?PHP 

include('conexao.php');



session_start();

if(!isset($_SESSION['sessao_user']) && !isset($_SESSION['sessao_senha']))

{

	//aqui ta logado

}else{

    header("Location:index.html");
    
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
                <input type="submit" style="margin: 10px;" value="Enviar" />
            </form>                
        </div>
    </body>
</html>