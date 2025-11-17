<?php 
    class Pessoa{
        protected $Nome;
        protected $Idade;
        protected $Sexo;
        protected $Experiencia;

        function getNome(){
            return $this->Nome;
        }

        function setNome($Nome){
            $this->Nome = $Nome;
        }

        function getIdade(){
            return $this->Idade;
        }

        function setIdade($Idade){
            $this->Idade = $Idade;
        }

        function getSexo(){
            return $this->Sexo;
        }

        function setSexo($Sexo){
            $this->Sexo = $Sexo;
        }

        function getExperiencia(){
            return $this->Experiencia;
        }

        function setExperiencia($Experiencia){
            $this->Experiencia = $Experiencia;
        }

        

    }


?>