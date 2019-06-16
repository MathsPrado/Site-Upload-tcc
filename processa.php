<?php
    include 'conexao.php';
    $campo = $_POST['pesquisa'];
    if($campo != ''){
        $query =mysqli_query($con, "SELECT * FROM `arquivos` WHERE `NOME` = '$campo' OR `CAMINHO_LOCAL` = '$campo'")
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
        $query =mysqli_query($con, "SELECT * FROM `arquivos`") or die( 
            mysqli_error($con));
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
    }