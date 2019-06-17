<?php
    include 'conexao.php';
    $campo = $_POST['pesquisa'];
    if(!empty($campo)){
        $sql = mysqli_query(con, "SELECT `CURSO` FROM `usuarios` WHERE `ID` LIKE '%$campo%'");
        $aux2 = mysqli_fetch_assoc($sql);
        $query =mysqli_query($con, "SELECT * FROM `arquivos` WHERE `NOME` LIKE '%$campo%' OR `CAMINHO_LOCAL` LIKE '%$campo%'")
        or die(mysqli_error($con));
        while ($aux = mysqli_fetch_assoc($query)) {
            
            echo '<tr >
            <td>'.$aux["ID_Usuario"].'</td>
            <td>'.$aux["NOME"].'</td>
            <td>'.$aux2["CURSO"].'</td>
            <td>'.$aux["CAMINHO_LOCAL"].'</td>';
            $cam = $aux["CAMINHO_LOCAL"];
            echo'<td><a href="load.php?hello='.$cam.'">Download</a></td>
            </tr>
            </tbody>';
        }
    }