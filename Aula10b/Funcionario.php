<?php 
    class Funcionario{
        private $setor;
        private $trabalhando;

        public function mudarTrabalho(){
            $this->trabalhando = true;

        }


        function getSetor(){
            return $this->setor;
        }


        function setSetor($setor){
            $this->setor = $setor;
        }


        function getTrabalhando(){
            return $this->trabalhando;
        }


        function setTrabalhando($trabalhando){
            $this->trabalhando = $trabalhando;
        }
    }



?>