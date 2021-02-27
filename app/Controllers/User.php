<?php

class User extends Controller{

    public function cadastrar(){

        $this->view('user/cadastrar');

    }

    public function logar(){

        $this->view('user/logar');

    }

    public function redefinir(){

        $this->view('user/redefinir');

    }

}