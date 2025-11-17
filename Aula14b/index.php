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
       
        $g = new Gafanhoto("Jubileu", 22, "M", "Juba");
        print_r($g);
       ?>
    </pre>
</div>
</body>
</html>