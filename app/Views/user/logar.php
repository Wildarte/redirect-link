<div class="container" style="height: 100vh">

    <div class="row">

        <div class="col-12 col-md-4 offset-md-4" style="margin: 10px auto; border-radius: 5px ;padding: 20px; box-shadow: 2px 2px 5px 5px #ddd; margin-top: 10vh; background-color: #fff">
            <form class="form" method="post" action="">
                
                <div class="text-center mb-4">
                    <img class="mb-4 bg-white rounded-circle" src="<?=URL?>/public/img/logo-2.png" alt="" width="80" height="80">
                    <h1 class="h3 mb-3 font-weight-normal">Acessar sua conta</h1>
                    
                </div>

                <div class="form-group row">
                    <label for="inputName" class="col-12 col-form-label"></label>
                    <div class="col-12">
                        <input type="email" class="form-control" name="inputName" id="inputName" placeholder="e-mail do usuário" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputName" class="col-12 col-form-label"></label>
                    <div class="col-12">
                        <input type="password" class="form-control" name="inputName" id="inputName" placeholder="senha do usuário" required>
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
                        <button type="submit" class="btn btn-success btn-block">Acessar</button>
                    </div>
                </div>
            </form>

            <div class="row text-center">
                <span class="col-sm-12 col-md-6 link-esqueciasenha"><a href="<?=URL?>/public/user/redefinir">esqueci minha senha</a></span>
                <span class="col-sm-12 col-md-6 link-esqueciasenha"><a href="<?=URL?>/public/user/cadastrar">não tenho conta</a></span>
            </div>
                
        </div>

    </div>

</div>