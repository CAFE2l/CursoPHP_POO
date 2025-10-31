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
           require_once 'caneta.php';

           $c1 = new Caneta("BIC", "Azul", 0.5);
           $c2 = new Caneta("SANEPAR", "METALICA", 2.0);

           print_r($c1);
           print_r($c2);
        ?>
    </pre>
</div>
</body>
</html>