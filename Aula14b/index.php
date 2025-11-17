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
       
        $v[0] = new Video("Aula 1 de Poo");
        $v[1] = new Video("Aula 2 de PHP");
        $v[2] = new Video("Aula 3 de HTML & CSS");
       
        print_r($v);
       ?>
    </pre>
</div>
</body>
</html>