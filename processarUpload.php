<?php

$uploaddir = 'uploadedImages/';
$uploadfile = $uploaddir . basename($_FILES['imagemAenviar']['name']);

$extPermitida = array("gif", "jpeg", "jpg", "png");

/* ----------------------------------------------------------  */
/* Nome do arquivo com base na data e hora  */
/* ----------------------------------------------------------  */

$datahr = date("Y-m-d h:i:s");
$datahr  = str_replace(" ", "", $datahr);
$datahr  = str_replace("-", "", $datahr);
$datahr  = str_replace(":", "", $datahr);

/* ----------------------------------------------------------  */
/* Pegando o nome do arquivo e a extensão  */
/* ----------------------------------------------------------  */

$extension = explode(".", $_FILES["imagemAenviar"]["name"]);
$renomearArquivo = $datahr.".".$extension[1];

/* ----------------------------------------------------------  */
/* Renomeando  */
/* ----------------------------------------------------------  */

$uploadfileNew = $uploaddir . basename($_FILES['imagemAenviar']).$renomearArquivo;

echo "<pre>";
if (move_uploaded_file($_FILES['imagemAenviar']['tmp_name'], $uploadfileNew )) {
    
    echo "Arquivo válido e enviado com sucesso.\n";
    
} else {
    
    echo "Possível ataque de upload de arquivo!\n";
    
}

echo 'Aqui está mais informações de debug:';

print_r($_FILES);

print "</pre>";

/*



 * 
 */
