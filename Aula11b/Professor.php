<?php 
    require_once 'Pessoa.php';
    class Professor extends Pessoa{
        private $especilidade;
        private $salario;

        public function receberAumento(){
            echo "<p>Dando aumento do professor $this->nome</p>";
            $this->salario += 100;
            return $this->salario;

        }

        function getespecilidade(){
            return $this->especilidade;
        }

        function setespecilidade($especilidade){
            $this->especilidade = $especilidade;
        }

        function getsalario(){
            return $this->salario;
        }

        function setsalario($salario){
            $this->salario = $salario;
        }

    }

?>