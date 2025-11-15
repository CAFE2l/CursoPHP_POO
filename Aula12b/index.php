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
        require_once 'Cachorro.php';
        require_once 'Arara.php';
        require_once 'GoldFish.php';
        require_once 'Tartaruga.php';
        require_once 'Cobra.php';
        require_once 'Canguru.php';

        $m = new Mamifero();
        $a = new Ave();
        $r = new Reptil();
        $canguru = new Canguru();
        $c = new Cachorro();
        $t = new Tartaruga();


        $m->locomover();
        $canguru->locomover();
        $c->locomover();
        $t->locomover();

        $m->emitirSom();
        $c->emitirSom();

        ?>
    </pre>
</div>
</body>
</html>