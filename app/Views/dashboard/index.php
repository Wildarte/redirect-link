<header>
    <nav class="navbar navbar-expand bg-white" style="padding: 0 10px; border-bottom: 1px solid; height: 10vh">
        <a class="navbar-brand" href="index.html">
            <img src="<?=URL?>/img/logo.png" alt="" style="height: 10vh;">
        </a>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0">
            
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: green"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Perfil</a>
                    <a class="dropdown-item" href="#">Configuração</a>
                    <a class="dropdown-item" href="#">Sobre</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Sair</a>
                </div>
            </li>
        </ul>
    </nav>
</header>

<main style="background-color: #eee; height: 100vh">

    <div id="mySidebar" class="sidebar">
        <header class="header-sidebar">
            <h1 class="title-sidebar"><i class="fas fa-tachometer-alt"></i> Dashboard</h1>
        </header>
        <div class="">
            <a href="" class="">Campanhas</a>
        </div>
    </div>
    <button class="openbtn" id="openbtn" onclick="openNav()">☰</button>

    <div id="main">
        
        <section>
            <header>
                <h1>Dashboard</h1>
            </header>
        </section>
    </div>

</main>