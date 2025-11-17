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

    }

?>