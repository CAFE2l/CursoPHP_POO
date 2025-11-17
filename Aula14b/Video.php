<?php 
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo {
        private $Titulo;
        private $Avaliacao;
        private $Views;
        private $Curtidas;
        private $Reproduzindo;
        
        public function __construct($Titulo){
            $this->Titulo = $Titulo;
            $this->Avaliacao = 1;
            $this->Views = 0;
            $this->Curtidas = 0;
            $this->Reproduzindo = false;
        }

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

        public function like(){

        }

        public function pause(){

        }

        public function play(){

        }
        
    }

?>