<?php 
    require_once 'Pessoa.php';
    class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        public function pagarMensalidade(){
            echo "<p>Pagando mensalidade do aluno $this->nome</p>";
        }

        function getmatricula(){
            return $this->matricula;
        }

        function setmatricula($matricula){
            $this->matricula = $matricula;
        }

        function getcurso(){
            return $this->curso;
        }

        function setcurso($curso){
            $this->curso = $curso;
        }

    }


?>