<?php

$uploaddir = 'uploadedImages/';
$uploadfile = $uploaddir . basename($_FILES['imagemAenviar']['name']);

$extPermitida = array("gif", "jpeg", "jpg", "png");
$extension = explode(".", $_FILES["imagemAenviar"]["name"]);

echo "<br/>";
echo "Pegando nome e extensão do arquivo";
echo "<br/>";
echo '<pre>';
var_dump($extension);
echo "</pre>";

echo '<pre>';
var_dump($_FILES);
echo "</pre>";

echo '<pre>';
var_dump($_FILES['imagemAenviar']['type']);
echo "</pre>";
echo '<pre>';
var_dump($_FILES['imagemAenviar']['name']);
echo "</pre>";

/*


if (move_uploaded_file($_FILES['imagemAenviar']['tmp_name'], $uploadfile)) {
    
    echo "Arquivo válido e enviado com sucesso.\n";
    
} else {
    
    echo "Possível ataque de upload de arquivo!\n";
    
}

echo 'Aqui está mais informações de debug:';

print_r($_FILES);

print "</pre>";
 * 
 */
