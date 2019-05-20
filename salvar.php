<?php
// Incluindo arquivo de conexão
require_once('conn.php');

// Constantes
//define('TAMANHO_MAXIMO', (2 * 1024 * 1024));

//var_dump($_FILES); 

$ImageName = $_FILES["file"]["name"];
$ImageType = $_FILES["file"]['type'];
$ImageSize = $_FILES["file"]['size'];

//utilizando o php para transformar para o tipo BLOB
$ImgData   = addslashes(file_get_contents($_FILES['file']['tmp_name']));

echo 'Tamanho: '.$ImageSize.'<br>';
echo 'Tipo: '.$ImageType.'<br>';
echo 'Nome: '.$ImageName.'<br>';

//executando a query de inserção. 
$result    = $conn->exec("INSERT INTO fotos (nome, conteudo, tipo, tamanho) VALUES('{$ImageName}','{$ImgData}','{$ImageType}','{$ImageSize}')");

if ($result) {
    echo "Successo ao salvar a imagem";
} else {
    echo "Falha ao salvar a imagem";
}

