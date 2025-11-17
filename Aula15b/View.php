<?php 
    require_once 'Video.php';
    require_once 'Gafanhoto.php';

    class View{
        private $Espectador;
        private $Filme;

        public function __construct($Espectador, $Filme){
            $this->Espectador = $Espectador;
            $this->Filme = $Filme;
            $this->Filme->setViews($this->Filme->getViews() + 1);
            $this->Espectador->settotAsistido($this->Espectador->gettotAssistido() + 1);
            $this->Espectador->ganharExp(10);
        }

        public function avaliar(){
            $this->Filme->setAvaliacao(5);
        }

        public function avaliarNota($nota){
            $this->Filme->setAvaliacao($nota);
        }   

        public function avaliarPorc($porcentagem){
            $nova = 0;
            if ($porcentagem < 20){
                $nova = 3;
            } elseif ($porcentagem <= 50){
                $nova = 5;
            } elseif($porcentagem <= 90){
                $nova = 8;
        } else{
            $nova = 10;
        }
        $this->Filme->setAvaliacao($nova);
    }
     public   function getEspectador(){
            return $this->Espectador;
        }

     public   function setEspectador($Espectador){
            $this->Espectador = $Espectador;
        }

      public  function getFilme(){
            return $this->Filme;
        }

    public    function setFilme($Filme){
            $this->Filme = $Filme;
        }
    }

?>