<?php 

    class Caneta{
        public $modelo;
        private $cor;
        private $ponta;
        private $tampada;

        function __construct($modelo, $cor, $ponta){
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->ponta = $ponta;
        }

        function getModelo(){
            return $this->modelo;
        }

        function getCor(){
            return $this->cor;
        }

        function getPonta(){
            return $this->ponta;
        }

        function getTampada(){
            return $this->tampada;
        }


        function setCor($cor){
            $this->cor = $cor;
        }

        function setPonta($ponta){
            $this->ponta = $ponta;
        }

        function setTampada($tampada){
            $this->tampada = $tampada;
        }

        function tampar(){
            $this->tampada = true;
        }

        function destampar(){
            $this->tampada = false;
        }


    }

?>