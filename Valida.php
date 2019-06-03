<?php

include('conexao.php');

#Verifica se o login ta certo e redireciona pra outra pagina se estiver

$sql = mysqli_query($conexao,"select id from usuarios where login='".$_POST['user_login']."' and senha='".$_POST['user_pass']."' limit 1") or die("Ce ta errado irmao");



if(mysqli_num_rows($sql)==1)

	{

		session_start();



		while($row = mysqli_fetch_assoc($sql)){

			$_SESSION['sessao_id'] = $row["id"];

		}

		

		$_SESSION['sessao_user'] = $_POST['user_login'];

		$_SESSION['sessao_senha'] = $_POST['user_senha'];

		header("Location: pagina.php");

	}

else

	{

		echo "conta inválida";

	}

?>#