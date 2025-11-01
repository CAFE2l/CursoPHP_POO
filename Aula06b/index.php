<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div>
    <h1>Projeto Controle Remoto</h1>
    <pre>
        <?php
            require_once 'ControleRemoto.php';
            require_once 'controlador.php';
            $c = new ControleRemote();
            $c->ligar();
            $c->maisVolume();
            $c->abrirMenu();
            
        ?>
    </pre>
</div>
</body>
</html>