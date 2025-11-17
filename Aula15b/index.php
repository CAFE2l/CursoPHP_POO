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

    $video[0] = new Video ("Aula 1 de POO");
    $video[1] = new Video ("Aula 12 de PHP");
    $video[2] = new Video ("Aula 15 de HTML & CSS");

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "Juba");

        $g[1] = new Gafanhoto("Creuza", 22, "F", "Creuzita");
       $v[0] = new View($Espectador, $Filme);

       $v[1] = new View($g[0], $video[2]);

       $v[2] = new View($g[0], $video[1]);

       $v[3] = new View($Espectador, $Filme);

    $v[0]->avaliar();
    $v[1]->avaliarPorc(84);
    $v[2]->avaliarNota(9);

       print_r($v[0]);
        
    
       ?>
    </pre>
</div>
</body>
</html>