<?php 
    require_once 'Animal.php';
    class Peixe extends Animal{
        private $corEscama;

        public function alimentar(){
            echo"<p>Comendo substâncias</p>";
        }   

        public function locomover(){
            echo "<p>Nadando</p>";
        }

        public function emitirSom(){
            echo "<p>Peixe não faz som!</p>";
        }

        public function soltarBolha(){
            echo "<p>Soltou um Bolha</p>";
       }

       function getcorEscama(){
            return $this->corEscama;
       }

       function setcorEscama($corEscama){
            $this->corEscama = $corEscama;
       }

    }

?>