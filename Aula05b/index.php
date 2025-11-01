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
            require_once 'contabanco.php';
            $p1 = new ContaBanco(); // Jubileu
            $p2 = new ContaBanco(); // Creuza parei no minuto 23
            $p1->setnumConta(1111);
            $p2->setnumConta(2222);
            $p1->abrirConta("cc");
            $p1->setDono("Jubileu");
            $p2->abrirConta("cp");
            $p2->setDono("Creuza");
        
            $p1->depositar(300);
            $p2->depositar(500);

            $p2->sacar(100);
            
            $p1->pagarMensalidade();
            $p2->pagarMensalidade();

            $p1->sacar(338);
            $p2->sacar(630);



            $p1->fecharConta();
            $p2->fecharConta();



            print_r($p1);
            print_r($p2);
        
        ?>
    </pre>
</div>
</body>
</html>