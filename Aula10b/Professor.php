<?php 
    class Professor{
        private $especialidade;
        private $salario;


        public function ReceberAumento($aumento){
            $this->salario = $this->salario + $aumento;
        }


        function getespecialidade(){
            return $this->especialidade;
        }

        function setespecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

        function getsalario(){
            return $this->salario;
        }

        function setsalario($salario){
            $this->salario = $salario;
        }
    }


?>