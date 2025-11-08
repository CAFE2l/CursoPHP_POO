<?php 
 class Pessoa {
    private $nome;
    private $idade;
    private $sexo; 


    public function fazerAniver(){
        $this->idade++;
    }

    public function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    public function getSexo(){
        return $this->sexo;
    }

    function setSexo($sexo){
        $this->sexo = $sexo;
    }
 }


?>