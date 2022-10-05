<?php

class Libro{

    public $isbn;
    public $titulo;
    public $autor;
    public $fecha;

    public function contructor($isbn, $titulo, $autor, $fecha){
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->fecha = $fecha;
    }

    public function contructorvacio(){

    }

    function setisbn($isbn){
        $this->isbn = $isbn;
    }

    function getisbn(){
        return $this->isbn;
    }

    function settitulo($titulo){
        $this->titulo = $titulo;
    }

    function gettitulo(){
        return $this->titulo;
    }

    function setautor($autor){
        $this->autor = $autor;
    }

    function getautor(){
        return $this->autor;
    }

    function setfecha($fecha){
        $this->fecha = $fecha;
    }

    function getfecha(){
        return $this->fecha;
    }
}

?>
