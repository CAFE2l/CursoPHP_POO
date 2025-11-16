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
        require_once 'Mamifero.php';        
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        $c = new Cachorro();
        $c->reagirFrase("Toma Comida");
        $c->reagirHora(12);
        $c->reagirDono(false);
        ?>
    </pre>
</div>
</body>
</html>