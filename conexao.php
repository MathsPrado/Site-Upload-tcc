<?php   
<<<<<<< HEAD
    $username ="root";
    $password ="";
    function conect($in)
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=php', $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            mysql_query($in, $conn) or die(mysql_error());
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    
=======
    $conexao = mysqli_conect('localhost','','php') or die("Erro de Conexão"); //aaaaaaaaaaaaaaa mds
>>>>>>> df8e2e31e0e55ec794a3acb92bcf1673bab0cef4
?>