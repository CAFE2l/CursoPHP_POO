<?php 
    require_once 'Animal.php';
    class Ave extends Animal{
        private $corPena;

        public function alimentar(){
            echo"<p>Comendo Frutas</p>";
        }

        public function emitirSom(){
            echo"<p>Som de Ave</p>";
        }

        public function fazerNinho(){
            echo "<p>Fez um Ninho</p>";
        }

        public function locomover(){    
            echo "<p>Voando</p>";
        }   

        function getcorPena(){
            return $this->corPena;
        }

        function setcorPena($corPena){
            $this->corPena = $corPena;
        }

    }


?>