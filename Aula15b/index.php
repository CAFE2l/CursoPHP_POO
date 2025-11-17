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
    <pre>
       <?php
       require_once 'Video.php';
       require_once 'Gafanhoto.php';
       require_once 'AcoesVideo.php';
       require_once 'Pessoa.php';
       require_once 'View.php';

       $v[0] = new View($Espectador, $Filme);

       print_r($v[0]);
        
       ?>
    </pre>
</div>
</body>
</html>