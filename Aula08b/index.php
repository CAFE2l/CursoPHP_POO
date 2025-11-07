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
                require_once 'Pessoa.php';
                require_once 'Livro.php';
            
                $p[0] = new Pessoa("Pedro", 16,  "M");
                $p[1] = new Pessoa("Maria", 31, "F");
                $l[0] = new Livro("PHP Básico", "José da Siva", 300, $p[0]);
                $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
                $l[2] = new Livro("PHP Moderno", "Gustavo Guanabara", 600, $p[0]);
                $l[3] = new Livro("PHP avançado", "Ana Paula ", 800, $p[1]);
                // print_r($l[0]);
                $l[0]->abrir();
                $l[0]->folhear(12);
                $l[0]->avancarPag();
                $l[0]->detalhes();

            ?>
        </pre>
    </div>
</body>
</html>