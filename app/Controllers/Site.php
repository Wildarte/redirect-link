<?php

class Site extends Controller{

    public function index(){

        $dados = [
            'tituloPagina' => 'Título Principal',
            'descricao' => 'Esta é a descrição da página Home'
        ];

        $this->view('site/home', $dados);

    }

    public function sobre(){

        echo "<p>View Sobre</p>";
        
        $this->view('site/sobre');

    }

}