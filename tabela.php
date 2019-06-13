<?php 
    require_once'conexao.php';
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
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>pdf</th>
                </tr>
                <?php 
                $sql = mysqli_query($con, "SELECT * FROM `arquivos`") or die( 
                    mysqli_error($con));
                while($aux = mysqli_fetch_assoc($sql)){
                    echo '<tr>';
                    echo '<td>' .$aux["ID_Usuario"]. '</td>' ;
                    echo '<td>' .$aux["NOME"]. '</td>';
                    echo '<td>' .$aux["CAMINHO_LOCAL"]. '</td>';
                    echo '</tr>';
                } ?>
            </table>
        </div>
    </body>
</html>