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
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
    


        //    $a1 = new Aluno("Gilberto", 33, "M");
        //    $a1->setNome("GIZ");
        //    $a1->setIdade(33);
        //    $a1->setSexo("M");
        //    $a1->setCurso("CyberSecurity");
        //    $a1->pagarMensalidade();
        //    print_r($a1);

        $b1 = new Bolsista("Gilberto", 33, "M");
        $b1->setNome("Carlos");
        $b1->setIdade(12);
        $b1->setSexo("M");
        $b1->setCurso("Engenharia de Software");
        $b1->setMatricula(123456);
        $b1->pagarMensalidade();
        $b1->bolsa("USA");
        print_r($b1);
        ?>  
    </pre>
</div>
</body>
</html>