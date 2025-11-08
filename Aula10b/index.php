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
        //Programa Principal 
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $p1 = new Pessoa("Pedro", 18, "M");
        $p2 = new Aluno("Maria", 18, "F");
        $p3 = new Professor("Cláudio", 32, "M");
        $p4 = new Funcionario("Fabiana", 21, "F");  

        $p2->setCurso("Informática");
        $p3->setSalario(2500);
        $p4->setSetor("RH");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        ?>
    </pre>
</div>
</body>
</html>