<?php 
    require_once 'Pessoa.php';
    class Gafanhoto extends Pessoa{
        private $Login;
        private $totAsistido;

        public function assistirMaisUm(){
            $this->totAsistido++;
        }

        public function __construct($Nome,$Idade,$Sexo,$Login){
            parent::__construct($Nome,$Idade,$Sexo);
            $this->totAsistido = 0;
            $this->Login = $Login;       

        }

        function getLogin(){
            return $this->Login;
        }

        function setLogin($Login){
            $this->Login = $Login;
        }

        function gettotAsistido(){
            return $this->totAsistido;
        }   

        function settotAsistido($totAsistido){
            $this->totAsistido = $totAsistido;
        }

    }

?>