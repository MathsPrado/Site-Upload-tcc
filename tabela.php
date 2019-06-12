<?php require_once'conexao.php';?>
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
                    <th>Nome</th>
                    <th>EmaiL</th>
                    <th>PDF</th>
                </tr>
                <tr>
                    <td>Peter</td>
                    <td>Griffin</td>
                    <td>$100</td>
                </tr>
                <?php 
                $sql = mysqli_query($con, "SELECT * FROM `usuarios`") or die( 
                    mysqli_error($con));
                while($aux = mysqli_fetch_assoc($sql)){
                    echo '<tr>';
                    echo '<td>' .$aux["campo 1 BD"]. '</td>' ;
                    echo '<td>' .$aux["campo 2 BD"]. '</td>';
                    echo '<td>' .$aux["campo 2 BD"]. '</td>';
                    echo '</tr>';
                } ?>
            </table>
        </div>
    </body>
</html>