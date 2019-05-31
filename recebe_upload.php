<?php
 
$_UPLOAD['pasta'] = 'uploads/';
  
if ($_FILES['arquivo']['error'] != 0) {
   die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
   exit;
}
  
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'])) {
    echo "Upload efetuado com sucesso!";
}else{
    echo "Não foi possível enviar o arquivo, tente novamente";
}
  
?>