<?php 
    class lutador{
        //Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        //Métodos   
        public function aprensentar(){}
        public function status(){}
        public function ganharLuta(){}
        public function perderLuta(){}
        public function empatarLuta(){}

        //Métodos especiais
        public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->peso = $pe;
            $this->categoria = null;
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }


        public function getNome(){
            return $this->nome;
        }

        public function setNome($no){
            $this->nome = $no;
        }   

        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function setNacionalidade($na){
            $this->nacionalidade = $na;
        }   

        public function getIdade($id){
            return $this->idade;
        }

        public function setIdade($id){
            $this->idade = $id;
        }

        public function getAltura($al){
            return $this->altura;
        }

        public function setAltura($al){
            $this->altura = $al;
        }

        public function getPeso($pe){
            return $this->peso;
        }

        public function setPeso($pe){
            $this->peso = $pe;
        }

        public function getCategoria($ca){
            return $this->categoria;
        }

        public function setCategoria($ca){
            $this->categoria = $ca;
        }

        public function getVitoririas($vi){
            return $this->vitorias;
        }

        public function setVitorias($vi){
            $this->vitorias = $vi;
        }                                   

        public function getDerrotas($de){
            return $this->derrotas;
        }   
    
        public function setDerrotas($de){
            $this->derrotas = $de;
        }

        public function getEmpates($em){
            return $this->empates;
        }

        public function setEmpates($em){
            $this->empates = $em;
        }
    }


?>