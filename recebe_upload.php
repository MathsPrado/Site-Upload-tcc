<?php
 
$diretorio_arq = 'C:\Users\Isaias\Documents';
$arq = $_FILES['arquivo']; 
 
$nome_arq    = $arq['name']; 
$tamanho_arq = $arq['size']; 
$tipo_arq    = $arq['type']; 
$tmpname_arq = $arq['tmp_name']; 

if($tamanho_arq > 0 && strlen($nome_arq) > 1) {  
    $caminho_arq = $diretorio_arq . $nome_arq; 
         
	if(move_uploaded_file($tmpname_arq, $diretorio_arq)){ 
		echo"Cadastro realizado com sucesso";				
	}else{
	    echo 'Não foi possível enviar'; 
		} 
}else{
    echo"Erro";
} 
?>