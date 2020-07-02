<?php
    class pessoa{
        private $nome;
        private $idade;
        private $peso;
        private $sexo;

        public function getNome(){
            return $this->nome;
        }

        public function setNome($argNome){
            $this->nome = $argNome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($argIdade){
            $this->idade = $argIdade;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso($argPeso){
            $this->peso = $argPeso;
        }
        
        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($argSexo){
            $this->sexo = $argSexo;
        }

        public function imprimir(){
            echo "<strong>PESSOA</strong> <br/>Nome: " . $this->nome . "<br/>Sexo: " . $this->sexo . 
            "<br/>Idade: " . $this->idade . " anos <br/>Peso: " . $this->peso . "Kg";  
        }
    }