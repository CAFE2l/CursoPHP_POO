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
        require_once 'Animal.php';
        require_once 'Ave.php';
        require_once 'Peixe.php';
        require_once 'Mamifero.php';
        require_once 'Reptil.php';

        $a = new Ave();
        $m = new Mamifero();
        $p = new Peixe();
        $r = new Reptil();

        $m->setPeso(33.5);
        $m->locomover();
        $a->locomover();
        $r->locomover();
        ?>
    </pre>
</div>
</body>
</html>