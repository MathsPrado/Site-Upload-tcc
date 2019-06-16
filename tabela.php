<?php 
    require_once'conexao.php';
    require_once'load.php';
    $id = $_COOKIE['id_user'];
    $result = mysqli_query($con,"SELECT * FROM `usuarios` WHERE `ID`= '$id'")
    or die(mysqli_error($con));
    $rest = mysqli_fetch_assoc($result);
    $idx = $rest['ID'];
    if ($idx != 1) {
        header("Location: pagina.php");
    }
    
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login</title>
        <link href="css/page.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

        <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color:#f5f5f5;
        }

        .tabin{
            background:rgba(44, 62, 80, 0.7);
            padding:40px;
            width:450px;
            margin:auto;
            margin-top:80px;
            height:430px;
            margin-left:180px;
            margin:0 auto;
            margin-top:90px;
        }
        </style>    
    </head>
    <body>
        <div class="tabin">
            <form >
                <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquisa pdf"/>
            </form>
            <a href="index.php"><input type="submit" name="sair" style="margin: 8px;" value="Sair" /> </a>
            <a href="tabela.php"><input type="submit" name="voltar" style="margin: 10px;" value="Voltar" /> </a>
            <div id="resultado">
                <?php
                    $query =mysqli_query($con, "SELECT * FROM `arquivos`") or die( 
                        mysqli_error($con));
                    echo "
                    <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Pdf</th>
                            <th>Botao</th>
                        </tr>
                    </thead>
                    <tbody>";
                    while ($aux = mysqli_fetch_assoc($query)) {
                        echo '<tr >
                        <td>'.$aux["ID_Usuario"].'</td>
                        <td>'.$aux["NOME"].'</td>
                        <td>'.$aux["CAMINHO_LOCAL"].'</td>';
                        $cam = $aux["CAMINHO_LOCAL"];
                        echo'<td><a href="load.php?hello='.$cam.'">Download</a></td>
                        </tr>
                        </tbody>';
                    }
                ?>
            </div>
            </table>
            
        </div>
    </body>
    <script>
        $(document).ready(function(){
            $('#pesquisa').keyup(function(){
                $('form').submit(function(){
                    var dados = $(this).serialize();
                    $.ajax({
                        url: 'processa.php',
                        type: 'POST',
                        dataType: 'html',
                        data: dados,
                        success: function(data){
                            $('#resultado').empty().html(data);
                        }
                    });
                    return false
                });
                $('form').trigger('submit');
            });
        });
    </script>
</html>