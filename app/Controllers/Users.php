<?php

class Users extends Controller{

    public function __construct()
    {
        $this->userModel = $this->model("User");
    }

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
                elseif($this->userModel->validarEmail($form['email'])):
                    $dados['email_erro'] = 'e-mail já cadastrado';
                else:
                    if(strlen($form['senha']) < 6):
                        $dados['senha_erro'] = 'A senha deve conter pelo menos 6 caracteres';
                        elseif($form['senha'] != $form['confirma_senha']):
                            $dados['confirma_senha_erro'] = "As senhas devem ser iguais";
                        else:
                            $dados['senha'] = password_hash($form['senha'], PASSWORD_DEFAULT);

                            if($this->userModel->insert($dados)):
                                echo "Cadastro realizado com sucesso";
                            else:
                            endif;

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


        $this->view('users/cadastrar', $dados);

    }

    public function logar(){

        $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($form)):
            
            $dados = [
                'email' => trim($form['email']),
                'senha' => trim($form['senha'])
            ];

            if(in_array("", $form)):

                if(empty($form['email'])):
                    $dados['email_erro'] = 'Preencha o campo email';
                endif;

                if(empty($form['senha'])):
                    $dados['senha_erro'] = 'Preencha o campo senha';
                    
                endif;
            else:
                if(Valida::validaEmail($form['email'])):
                    $dados['email_erro'] = 'e-mail inválido';
                else:
                    $user = $this->userModel->validarUser($form['email'], $form['senha']);
                    if(!$user):
                        
                        $dados['user_erro'] = 'usuário/senha inválido';
                    else:
                        $this->createSessionUser($user);
                        header("Location: ".URL."");
                        echo "Pode fazer login <hr>";
                    endif;
    
                endif;

            endif;

            var_dump($form);

        else:

            $dados = [
                'email' => '',
                'senha' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'user_erro' => ''
            ];

        endif;

        $this->view('users/logar', $dados);

    }

    public function redefinir(){

        $this->view('users/redefinir');

    }

    private function createSessionUser($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->nome;
        $_SESSION['user_email'] = $user->email;
    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_email']);

        session_destroy();

        header("Location: ".URL."");
    }

}