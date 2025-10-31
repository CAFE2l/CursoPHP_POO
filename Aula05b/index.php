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
    <?php 
        require_once 'contabanco.php';  
        $p1 = new ContaBanco(); // Jubileu
        $p2 = new ContaBanco(); // Creuza
        $p1->abrirConta("cc");
        $p1->setDono("Jubileu");

        $p2->abrirConta("cp");
        $p2->setDono("Creuza");
    
    ?>
</div>
</body>
</html>