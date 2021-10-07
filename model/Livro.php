<?php

Class Livro{

    private $titulo;
    private $descricao;
    private $reservado;
    private $categoria;
    private $link_imagem;

    function __construct($titulo, $descricao, $categoria,$reservado, $link_imagem){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->reservado = $reservado;
        $this->categoria = $categoria;
        $this->link_imagem = $link_imagem;
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

    function get_categoria(){
        return $this->categoria;
    }

    function set_categoria($categoria){
        $this->categoria = $categoria;
    }

    function get_link_imagem(){
        return $this->link_imagem;
    }

    function set_link_imagem($link_imagem){
        $this->link_imagem = $link_imagem;
    }
}