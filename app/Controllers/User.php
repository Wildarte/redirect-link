<?php

class User extends Controller{

    public function cadastrar(){

        $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($form)):
            
            $dados = [
                'nome' => trim($form['nome']), //trim function remove all spaces before and after of the phrase
                'email' => trim($form['email']),
                'senha' => trim($form['senha']),
                'confirma_senha' => trim($form['confirma_senha'])
            ];

            if(in_array("", $form)):

                if(empty($form['nome'])):
                    $dados['nome_erro'] = 'Preencha o campo nome';
                endif;

                if(empty($form['email'])):
                    $dados['email_erro'] = 'Preencha o campo email';
                endif;

                if(empty($form['senha'])):
                    $dados['senha_erro'] = 'Preencha o campo senha';
                    
                endif;

                if(empty($form['confirma_senha'])):
                    $dados['confirma_senha_erro'] = 'Preencha o campo confirma senha';
                endif;
            else:
                if(Valida::validaNome($form['nome'])):
                    $dados['nome_erro'] = "Insira um nome válido";
                elseif(Valida::validaEmail($form['email'])):
                    $dados['email_erro'] = 'e-mail inválido';
                else:
                    if(strlen($form['senha']) < 6):
                        $dados['senha_erro'] = 'A senha deve conter pelo menos 6 caracteres';
                        elseif($form['senha'] != $form['confirma_senha']):
                            $dados['confirma_senha_erro'] = "As senhas devem ser iguais";
                        else:
                            echo "Pode enviar o formulário";
                    endif;
    
                endif;

                
            endif;

        else:

            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirma_senha' => '',
                'nome_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirma_senha_erro' => ''
            ];

        endif;


        $this->view('user/cadastrar', $dados);

    }

    public function logar(){

        $this->view('user/logar');

    }

    public function redefinir(){

        $this->view('user/redefinir');

    }

}