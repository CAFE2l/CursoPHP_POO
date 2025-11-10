<?php 
    require_once 'Aluno.php';
    class Bolsista extends Aluno{
        private $bolsa;
    
        public function renovarBolsa(){
            echo "<p>Renovando bolsa do aluno $this->nome</p>";
        }

    }


?>