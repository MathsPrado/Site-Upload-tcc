<?php
require_once'load.php';
if(isset($_FILES['file'])){
	$textname = $_POST['nome'];
	$arq = $_FILES['file']; 
	//Dados do arquivo
	$nome_arq    = $arq['name']; 
	$tmpname_arq = $arq['tmp_name']; 

	$arq_ext = explode('.', $nome_arq);
	$arq_ext = strtolower(end($arq_ext));

	$tipo_aceitos = array('pdf', 'doc');

	if(in_array($arq_ext, $tipo_aceitos) && $textname != '') {  
		$arq_destino = 'uploads/' . $textname. '.pdf';		

		if(move_uploaded_file($tmpname_arq, $arq_destino)){ 
			echo"Cadastro realizado com sucesso";
			echo $arq_destino;
			expressEnvia($arq_destino);
			header("Location: pagina.php");				
		}else{
			echo 'Não foi possível enviar'; 
			} 
	}
}else{
	echo"ERRO";
}
if(isset($_POST['volta'])){
	header("Location:index.html");
}
?>