<?php 
    require_once 'Animal.php';
    class Mamifero extends Animal{
        protected $corPelo;
        public function locomover(){
            echo "<p>Locomovendo como Mamífero</p>";
        }
        public function alimentar(){
            echo "<p>Alimentando Mamífero</p>";
        }
        public function emitirSom(){
            echo "<p>Som de Mamifero</p>";
        }



    }


?>