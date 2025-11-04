<?php 
require_once "lutador.php";
    class Luta{
        //Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        //Métodos públicos
        public function marcarLuta($l1, $l2){
            if ($l1.getCategoria() == $l2.getCategoria() && ($l1 != $l2)){
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;

            } else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        public function lutar(){
            if($this->aprovada){
                $this->desafiado.apresentar();
                $this->desafiante.apresentar();

                $vencedor = rand(0,2);

                switch($vencedor){
                    case 0:
                        break;
                        echo "EMPATE";
                        $this->desafiado.empatarLuta();
                        $this->desafiante.empatarLuta();

                    case 1:
                        echo "<p>".$this->desafiado->getNome()." venceu</p>";
                        $this->desafiado.perderLuta();
                        $this->desafiante.ganharLuta();

                    case 2:
                        echo "<p>".$this->desafiante->getNome()." venceu</p>";
                        $this->desafiado.ganharLuta();
                        $this->desafiante.perderLuta();
                        break;
                    }
            } else{
                echo"<p>Luta não pode acontecer</p>";
            }
        }

        //Métodos especiais
        function getDesafiado(){
            return $this->desafiado;
        }

        function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }     
        function getDesafiante(){
            return $this->desafiante;
        }
        function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }

        function getRounds(){
            return $this->rounds;
        }

        function setRounds($rounds){
            $this->rounds = $rounds;
        }

        function getAprovada(){
            return $this->aprovada;
        }

        function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }


    }


?>