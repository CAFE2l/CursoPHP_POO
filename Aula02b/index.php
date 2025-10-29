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
            $c1 = new Caneta();
            $c1->modelo = 'Bic';
            $c1->cor = 'Azul';
            $c1->ponta = 0.7;
            $c1->carga = 100;
            $c1->tampada = false;
            $c1->tampar();
            $c1->rabiscar();

            print_r($c1);

            $c2 = new Caneta();
            $c2->modelo = 'Faber';
            $c2->cor = 'Vermelha';
            $c2->ponta = 0.5;
            $c2->carga = 100;
            $c2->tampada = false;
            $c2->rabiscar();

            print_r($c2);
        ?>
    </pre>
</div>
</body>
</html>