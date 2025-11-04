<?php 
require_once "lutador.php";
    class Luta{
        //Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        //Métodos públicos
        public function marcarLuta(){

        }

        public function lutar(){

        }

        //Métodos especiais
        function getDesafiado(){
            return $this->desafiado;
        }

        function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }     
        function getDesafiante(){
            return $this->desafiante;
        }
        function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }

        function getRounds(){
            return $this->rounds;
        }

        function setRounds($rounds){
            $this->rounds = $rounds;
        }

        function getAprovada(){
            return $this->aprovada;
        }

        function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }


    }


?>