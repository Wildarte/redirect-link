<?php

class Rotas{

    private $controlador = 'Site';
    private $metode = 'index';
    private $param = [];
    
    public function __construct()
    {
        $url = $this->url() ? $this->url() : [0];

        if(file_exists('../app/Controllers/'.ucwords($url[0]).'.php')){
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../app/Controllers/'.$this->controlador.'.php';
        $this->controlador = new $this->controlador;

        if(isset($url[1])){
            if(method_exists($this->controlador, $url[1])){
                $this->metode = $url[1];
                unset($url[1]);
            }
        }

        $this->param = $url ? array_values($url) : [];
        call_user_func_array([$this->controlador, $this->metode], $this->param);

    }

    public function url(){

        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        if(isset($url)){

            $url = trim(rtrim($url, '/'));

            $url = explode('/', $url); //explode() divide uma string em strings

            return $url;
        }

    }

}