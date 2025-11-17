<?php 
    class Video {
        private $Titulo;
        private $Avaliacao;
        private $Views;
        private $Curtidas;
        private $Reproduzindo;
        
        function getTitulo(){
            return $this->Titulo;
        }
        
        function setTitulo($Titulo){
            $Titulo = $Titulo;
        }

        function getAvaliacao(){
            return $this->Avaliacao;

        }

        function setAvaliacao($Avaliacao){
            $this->Avaliacao = $Avaliacao;
        }

        function getViews(){
            return $this->Views;
        }

        function setViews($Views){
            $this->Views = $Views;
        }

        function getCurtidas(){
            return $this->Curtidas;
        }

        function setCurtidas($Curtidas){
            $this->Curtidas = $Curtidas;
        }

        function getReproduzindo(){
            return $this->Reproduzindo;
        }

        function setReproduzindo($Reproduzindo){
            $this->Reproduzindo = $Reproduzindo;
        }
        
    }

?>