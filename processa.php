<?php
    include 'conexao.php';
    $campo = $_POST['pesquisa'];
    if(!empty($campo)){
        $query =mysqli_query($con, "SELECT * FROM `arquivos` WHERE `NOME` LIKE '%$campo%' OR `CAMINHO_LOCAL` LIKE '%$campo%'")
        or die(mysqli_error($con));
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
    }else{
        $sql =mysqli_query($con, "SELECT * FROM `arquivos`") or die( 
            mysqli_error($con));
        while ($aux = mysqli_fetch_assoc($sql)) {
            echo '<tr >
            <td>'.$aux["ID_Usuario"].'</td>
            <td>'.$aux["NOME"].'</td>
            <td>'.$aux["CAMINHO_LOCAL"].'</td>';
            $cam = $aux["CAMINHO_LOCAL"];
            echo'<td><a href="load.php?hello='.$cam.'">Download</a></td>
            </tr>
            </tbody>';
        }
    }