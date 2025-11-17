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