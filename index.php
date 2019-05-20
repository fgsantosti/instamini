<!DOCTYPE html>
<html>
<head>
    <title>InstaMini</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
</head>
<body>
<div class="container">


<?php
// Incluindo arquivo de conexão
require_once 'conn.php';
 
// Selecionando fotos
$result = $conn->query('SELECT id, nome, tipo, tamanho FROM fotos');
?>

<h3>Lista de Imagens</h3>
<div  align="center">
        <?php while($foto = $result->fetch(PDO::FETCH_OBJ)){?>
            <div >
                <div class="thumbnail">
                    <figure class="figure">
                        <img width="500" height="500" src="imagem.php?id=<?php echo $foto->id ?>" />
                    </figure>
                    <div class="caption">
                        <strong>Nome:</strong> <?php echo $foto->nome ?> <br/>
                        <strong>Tipo:</strong> <?php echo $foto->tipo ?> <br/>
                        <strong>Tamanho:</strong> <?php echo $foto->tamanho ?> bytes <br/>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
</body>
</html>
