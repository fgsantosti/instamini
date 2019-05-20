<?php
// Incluindo arquivo de conexão
require_once 'conn.php';
 
$id = (int) $_GET['id'];
 
// Selecionando fotos
$result = $conn->query("SELECT conteudo, tipo FROM fotos WHERE id = '{$id}'");

 
// Se executar corretamente
if ($result->execute()){
    // Alocando foto
    $foto = $result->fetch(PDO::FETCH_OBJ);
    
    // Se existir
    if ($foto != null)
    {
        // Definindo tipo do retorno
        header('Content-Type: '. $foto->tipo);
        
        // Retornando conteudo
        echo $foto->conteudo;
    }
}