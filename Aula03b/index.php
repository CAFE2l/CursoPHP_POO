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
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "BIC cristal";
            // $c1->cor = "Azul";
            // $c1->ponta = 0.5; //atributo privado
            // $c1->tampada; //atributo protegido
            print_r($c1);
            $c1->rabiscar();
            $c1->tampar();
        ?>
    </pre>
</div>
</body>
</html>