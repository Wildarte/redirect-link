<?php include '../app/Views/header.php'; ?>

<div class="container" style="height: 100vh">

    <div class="row">

        <div class="col-12 col-md-4 offset-md-4" style="margin: 10px auto; border-radius: 5px ;padding: 20px; box-shadow: 2px 2px 5px 5px #ddd; margin-top: 10vh; background-color: #fff">
            <form class="form" method="post" action="">
                <?= Sessao::msg('user') ?>
                <div class="text-center mb-4">
                    <img class="mb-4 bg-white rounded-circle" src="<?=URL?>/public/img/logo-2.png" alt="" width="80" height="80">
                    <h1 class="h3 mb-3 font-weight-normal">Redefinir senha</h1>
                    <p class="text-muted">informe o e-mail cadastrado para receber um código e redefinir sua senha</p>
                    
                </div>

                <div class="form-group row">
                    <label for="inputName" class="col-12 col-form-label"></label>
                    <div class="col-12">
                        <input type="text" class="form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>" name="email" id="email" placeholder="e-mail do usuário">
                        <div class="invalid-feedback">
                            <?= $dados['email_erro'] ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <p style="margin-left: 15px;">
                    <input type="checkbox" name="" id="">
                    <label for="">não sou um robô</label>
                    </p>
                    
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-info btn-block">Enviar Código</button>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12 text-center">
                        <a href="<?=URL?>">Voltar ao início</a>
                    </div>
                </div>
            </form>
                
        </div>

    </div>

</div>