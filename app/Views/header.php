<header>
    <nav class="navbar navbar-expand-sm navbar-light" style="background: transparent;">
        <div class="container">
            <a class="navbar-brand" href="<?=URL?>">
                <img src="<?=URL?>/public/img/logo.png" alt="">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    
                </ul>
                <div class=" my-2 my-lg-0">
                    <a href="<?=URL?>/site/sobre" class="item-menu">Sobre</a>

                    <?php if(Sessao::estaLogado()): ?>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success"><strong>Usuário: </strong><?= $_SESSION['user_name'] ?></button>
                            <a href="<?=URL?>/users/logout" class="btn btn-danger">Sair</a>
                        </div>
                    <?php else: ?>
                        <a href="<?=URL?>/users/logar" class="btn btn-success m-2">Logar</a>
                        <a href="<?=URL?>/users/cadastrar" class="btn btn-outline-success">Cadastrar-se</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header>




