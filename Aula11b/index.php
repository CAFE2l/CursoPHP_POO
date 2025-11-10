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
            require_once 'Professor.php';
            require_once 'tecnico.php';

            $p1 = new Professor("test", 33, "m");
            $p1->setNome("Gabrielcio");
            $p1->setIdade(28);
            $p1->setSexo("Masculino");
            $p1->setespecilidade("JOGADOR DE LOL Akakakak");
            $p1->setSalario(5000);
            $p1->receberAumento();

            
            print_r($p1);
        ?>  
    </pre>
</div>
</body>
</html>