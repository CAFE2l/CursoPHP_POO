<?php 
    require_once 'Lobo.php';
    class Cachorro extends Lobo {
        public function emitirSom(){
            echo "<p>AU AU AU </p>";
        }

    function reagirFrase($frase){
        if ($frase == "Toma Comida" || $frase == "Olá"){
            echo "<p>Abanar e Latir</p>";

        }else{
            echo "<p>Rosnar</p>";
        }
    }

    function reagirHora($hora){
        if($hora < 12){
            echo "<p>Abanar</p>";
        } elseif($hora>=18){
            echo "<p>Ignorar</p>";
        }else{
            echo "<p>Abanar e Latir</p>";
        }
    }

    function reagirDono($Dono){
        if ($Dono == True){
            echo "<p>Abanar e Latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }

    function reagirIdadePeso($idade, $peso){
        if($idade < 5){
            if($peso < 10){
                echo "<p>Abanar</p>";
            }else{
                echo "<p>Latir</p>";
            }
        }else{
            if($peso < 10){
                echo "<p>Rosnar</p>";
            }else{
                echo "<p>Ignorar</p>";
            }
        } 
    }
    }

?>