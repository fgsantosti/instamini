<?php
// Incluindo arquivo de conexão
require_once('conn.php');
 
// Selecionando fotos
$result = $conn->query('SELECT id, nome, tipo, tamanho FROM fotos1');
?>

<h3>Lista de Imagens</h3>
<div class="row">
        <?php while($foto = $result->fetch(PDO::FETCH_OBJ)): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img width="500" height="500"src="imagem.php?id=<?php echo $foto->id ?>" />
                    <div class="caption">
                        <strong>Nome:</strong> <?php echo $foto->nome ?> <br/>
                        <strong>Tipo:</strong> <?php echo $foto->tipo ?> <br/>
                        <strong>Tamanho:</strong> <?php echo $foto->tamanho ?> bytes <br/>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </div>