<?php 
    require_once 'Aluno.php';

    class Tecnico extends Aluno{
        private $registroProfissional;

        public function pratica(){
            echo "<p>O tecnico $this->nome está praticando programação</p>";
        }
     
        
        function getregistroProfissional(){
            return $this->registroProfissional;
        }

        function setregistroProfissional($registroProfissional){
           $this->registroProfissional = $registroProfissional;
    }
    }
?>
?>