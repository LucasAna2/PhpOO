<?php
    class Livro{
        private $titulo;
        private $ano;
        private $autor;
        private $edicao;

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($argTitulo){
            $this->titulo = $argTitulo;
        }

        public function getAno(){
            return $this->ano;
        }

        public function setAno($argAno){
            $this->ano = $argAno;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function setAutor($argAutor){
            $this->autor = $argAutor;
        }

        public function getEdicao(){
            return $this->edicao;
        }

        public function setEdicao($argEdicao){
            $this->edicao = $argEdicao;
        }

        public function imprimir(){
            echo "<strong>LIVRO</strong> <br/>Título: " . $this->getTitulo() . "<br/>Autor: " . $this->getAutor() .
            "<br/>Edição: " . $this->getEdicao() . "<br/>Ano: " . $this->getAno();
        }
    }
