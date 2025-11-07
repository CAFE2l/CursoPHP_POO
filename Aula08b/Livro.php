<?php 
    require_once 'Publicacao.php';
    require_once 'Pessoa.php';

    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes (){
            echo "<p>Livro: " . $this->titulo . " escrito por " . $this->autor . "</p>";
            echo "<p>Páginas: " . $this->totPaginas . " atual: " . $this->pagAtual . "</p>";
            echo "<p>Sendo lido por: " . $this->leitor->getNome() . "</p>";
        }

        public function abrir(){
            $this->aberto = true;
        }

        public function fechar(){
            $this->aberto = false;
        }

        public function folhear() {
            if ($this->aberto) {
                // For simplicity, let's just advance one page when folhear is called without a specific page number
                // Or you could implement a default behavior, e.g., go to the first page if not already open.
                // For now, let's just set it to page 1 if it's open.
                $this->pagAtual = 1;

            }
        }

        public function avancarPag(){
            if ($this->aberto && $this->pagAtual < $this->totPaginas) {
                $this->pagAtual++;
            }
        }

        public function voltarPag(){
            if ($this->aberto && $this->pagAtual > 0) {
                $this->pagAtual--;
            }
        }


        function __construct($titulo, $autor, $totPaginas, $leitor){
                $this->titulo = $titulo;
                $this->autor = $autor;
                $this->totPaginas = $totPaginas;
                $this->leitor = $leitor;
                $this->pagAtual = 0;
                $this->aberto = false;
        }

        function getTitulo(){
            return $this->titulo;
        }

        function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        function getAutor(){
            return $this->autor;
        }

        function setAutor($autor){
            $this->autor = $autor;
        }

        function getTotPaginas(){
            return $this->totPaginas;
        }

        function setTotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }

        function getPagAtual(){
            return $this->pagAtual;
        }

        function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }

        function getAberto(){
            return $this->aberto;
        }

        function setAberto($aberto){
            $this->aberto = $aberto;
        }

        function getLeitor(){
            return $this->leitor;
        }

        function setLeitor($leitor){
            $this->leitor = $leitor;
        }



    }

    
?>