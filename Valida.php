<?php

include('conexao.php');
if(isset($_POST['user_email'])){
	$in = "SELECT `email`,`senha` FROM `usuarios` WHERE `email` = ".$_POST['user_email']." AND `senha` = ".$_POST['user_pass'];
	$resut = mysql_query($conn, $in);
	if (!$resut){
	echo("Error description: " . mysqli_error($conn));
	}
}else{
	echo"Fall";
}

/*$sql = mysqli_query($conexao, "select id from usuarios where login='" . $_POST['user_login'] . "' and senha='" . $_POST['user_pass'] . "' limit 1") or die("Ce ta errado irmao");

if (mysqli_num_rows($sql) == 1) {

	session_start();



	while ($row = mysqli_fetch_assoc($sql)) {

		$_SESSION['sessao_id'] = $row["id"];
	}



	$_SESSION['sessao_user'] = $_POST['user_login'];

	$_SESSION['sessao_senha'] = $_POST['user_senha'];

	header("Location: pagina.php");
} else {

	echo "conta inválida";
}
*/
?>