<?php 
    require_once 'Aluno.php';
    class Bolsista extends Aluno{
        protected $bolsa;
    
        public function renovarBolsa(){
            echo "<p>Renovando bolsa do aluno $this->nome</p>";
        }

        function getBolsa(){
            return $this->bolsa;
        }

        function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }

        public function pagarMensalidade(){
            echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";

        }
    }


?>