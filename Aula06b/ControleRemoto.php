<?php 
    require_once 'controlador.php';
    class ControleRemote implements Controlador{
        //Atributos
        private $volume;
        private $ligado;
        private $tocando;

        //Métodos especiais
        function __construct(){
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }
        function getVolume(){
            return $this->volume;
        }
        function setVolume($volume){
            $this->volume = $volume;
        }   
        function getLigado(){
            return $this->ligado;
        }
        function setLigado($ligado){
            $this->ligado = $ligado;
        }
        function getTocando(){
            return $this->tocando;
        }   
        function setTocando($tocando){
            $this->tocando = $tocando;
        }

        //Métodos da interface
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<p>-----MENU-----</p>";
            echo "Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
            
            echo"<br>";
            echo "Está tocando?: " . ($this->getTocando()?"SIM":"NÃO");
            echo"<br>";
            echo "Volume: " . $this->getVolume();
        
            for($i=0; $i <= $this->getVolume(); $i+=10){
                echo "|";
            }
        }
        public function fecharMenu(){
            echo "Fechando Menu...";
        }
        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            } else{
                echo "<p>ERRO! não posso aumentar o volume</p>";
            }
        }
        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 5);
           } else{
                echo "<p>ERRO! não posso diminuir o volume</p>";
           }
        }
        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }
        public function desligarMudo(){ 
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVolume(50);
            }
        }
        public function play(){
            if($this->getLigado() && !$this->getTocando()){
                $this->setTocando(true);
            }
        }
        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }
    }
?>