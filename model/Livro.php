<?php

Class Livro{

    private $titulo;
    private $descricao;
    private $reservado;

    function __construct($titulo, $descricao, $reservado){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->reservado = $reservado;

    }

    function get_titulo(){
        return $this->titulo;
    }

    function set_titulo($titulo){
        $this->titulo = $titulo;
    }

    function get_descricao(){
        return $this->descricao;
    }

    function set_descricao($descricao){
        $this->descricao = $descricao;
    }

    function get_reservado(){
        return $this->reservado;
    }

    function set_reservado($reservado){
        $this->reservado = $reservado;
    }
}