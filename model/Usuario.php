<?php

Class Usuario{
    private $name;
    private $email;
    private $senha;

    function __construct($name, $email, $senha){
        $this->name = $name;
        $this->email = $email;
        $this->senha = $senha;
    }

    function get_name(){
        return $this->name;
    }

    function set_name($name){
        $this->name = $name;
    }

    function get_email(){
        return $this->email;
    }

    function set_email($email){
        $this->email = $email;
    }

    function get_senha(){
        return $this->senha;
    }

    function set_senha($senha){
        $this->senha = $senha;
    }
}