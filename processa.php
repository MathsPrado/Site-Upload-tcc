<?php
    include 'conexao.php';
    $campo = $_POST['pesquisa'];
    if(!empty($campo)){
        $query = mysqli_query($con, "SELECT c.ID_Usuario, c.NOMEX, ca.CURSO, c.CAMINHO_LOCAL 
        FROM `arquivos` AS c INNER JOIN `usuarios` AS ca ON c.ID_Usuario=ca.ID 
        WHERE `NOMEX` LIKE '%$campo%' OR `CAMINHO_LOCAL` LIKE '%$campo%' OR `CURSO` LIKE '%$campo%'")or die(mysqli_error($con));
        while ($aux = mysqli_fetch_assoc($query)) {
            
            echo '<tr >
            <td>'.$aux["ID_Usuario"].'</td>
            <td>'.$aux["NOMEX"].'</td>
            <td>'.$aux["CURSO"].'</td>
            <td>'.$aux["CAMINHO_LOCAL"].'</td>';
            $cam = $aux["CAMINHO_LOCAL"];
            echo'<td><a href="load.php?hello='.$cam.'">Download</a></td>
            </tr>
            </tbody>';
        }
    }