<?php
if(isset($_FILES['file'])){

	$arq = $_FILES['file']; 
	//Dados do arquivo
	$nome_arq    = $arq['name']; 
	$tmpname_arq = $arq['tmp_name']; 

	$arq_ext = explode('.', $nome_arq);
	$arq_ext = strtolower(end($arq_ext));

	$tipo_aceitos = array('pdf', 'doc');

	if(in_array($arq_ext, $tipo_aceitos)) {  
		$arq_destino = 'uploads/' . $nome_arq;		

		if(move_uploaded_file($tmpname_arq, $arq_destino)){ 
			echo"Cadastro realizado com sucesso";
			echo $arq_destino;				
		}else{
			echo 'Não foi possível enviar'; 
			} 
	}
}else{
	echo"ERRO";
}
?>