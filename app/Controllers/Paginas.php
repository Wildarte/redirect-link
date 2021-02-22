<?php

class Paginas extends Controller{

    public function index(){

        $dados = [
            'tituloPagina' => 'Título Principal',
            'descricao' => 'Esta é a descrição da página Home'
        ];

        $this->view('paginas/home', $dados);

    }

    public function sobre(){
        
    }

}