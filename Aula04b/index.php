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

           $c1 = new Caneta();
           print_r($c1);
        ?>
    </pre>
</div>
</body>
</html>