<?php 
    class Livro {
        private $Titulo;
        private $Autor;
        private $totPaginas;
        private $pagAtual;
        private $Aberto;
        private $Leitor;


        function __construct($Titulo, $Autor, $totPaginas, $Leitor){
                
        }


        public function detalhes(){

        }


        function getTitulo(){
            return $this->Titulo;
        }

        function setTitulo($titulo){
            $this->Titulo = $titulo;
        }

        function getAutor(){
            return $this->Autor;
        }

        function setAutor($Autor){
            $this->Autor = $Autor;
        }

        function getTotPaginas(){
            return $this->totPaginas;
        }

        function setTotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }

        function getpagAtual(){
            return $this->pagAtual;
        }

        function setpagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }

        function getAberto(){
            return $this->Aberto;
        }

        function setAberto($Aberto){
            $this->Aberto = $Aberto;
        }

        function getLeitor(){
            return $this->Leitor;
        }

        function setLeitor($Leitor){
            $this->Leitor = $Leitor;
        }

    }

?>