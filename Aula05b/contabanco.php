<?php 
    class ContaBanco {
        //Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        
        //Métodos
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == "cc"){
                $this->setSaldo(50);
            }elseif($t == "cp"){
                $this->setSaldo(150);
            }

        }

        public function fecharConta(){
            if($this->getsaldo() > 0 ){
                echo "Conta com dinheiro";
            } elseif($this->getsaldo() < 0 ){
                echo "Conta com débito";
            }else{
                $this->setStatus(false);
                echo "Conta fechada";
            }
        }

        public function depositar($v){
            if ($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito realizado R$ $v reais na conta da " . $this->getDono() . "</p>";
            }else{
                echo "Conta fechada, Impossível depositar";
            }
        }

        public function sacar($v){
            if ($this->getStatus()){
                if ($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque realizado R$ $v reais com sucesso na conta da " . $this->getDono() . "</p>";
                }else{
                    echo "Saldo insuficiente";
            
                }            
            } else{
                echo "Conta fechada, Impossível sacar";
            }
        }

        public function pagarMensalidade(){
            if($this->getTipo() == "cc"){
                $v = 12;
            }elseif($this->getTipo() == "cp"){
                $v = 20;
            }
           if ($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de $v debitada na conta de " . $this->getDono() . "</p>";
           } else{
                echo "Conta fechada, Impossível pagar mensalidade";
           }
        }

        //Métodos Especiais 

        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta Criada com sucesso!</p>";
        }   


        public function getnumConta(){
            return $this->numConta;
        }

        public function setnumConta($n){
            $this->numConta = $n;
        }

        public function gettipo(){
            return $this->tipo;
        }

        public function settipo($t){
            $this->tipo = $t;
        }

        public function getdono(){
            return $this->dono;
        }

        public function setdono($d){
            $this->dono = $d;
        }

        public function getsaldo(){
            return $this->saldo;
        }

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function setStatus($status){
            $this->status = $status;
        }

        public function getStatus(){
            return $this->status;
        }
    

    }



?>