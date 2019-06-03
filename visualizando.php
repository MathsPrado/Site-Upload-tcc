<?php
    require_once 'cadastro.php';
?>;

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de PDFs</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario->getNome?></td>
                <td><?php echo $usuario->getEmail?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>