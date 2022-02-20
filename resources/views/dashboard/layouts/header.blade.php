<!-- HEADER DESKTOP-->
<nav class="navbar navbar-expand-lg" id="topnav">
  <a class="navbar-brand" href="/"><img src="/assets/images/logo.svg" width="100px" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon span-nav"><i class="fas fa-bars"></i></span>
    <span class="navbar-toggler-icon span-close"><i class="fas fa-times"></i></span>
  </button>

    <span class="page_info">
        <p>Administrativo / Painel de acionista</p>
    </span>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="list-unstyled ml-auto">
        <li>
            <a class="btn_nav" href="/admin">
                Modo administrativo
            </a>

            <a class="btn_nav d-none" href="#">
                Modo acionista
            </a>
            <span class="last_login">
                <p>último acesso: {{ date ('d/m/Y')}}</p>
            </span>
        </li>
        <li class="nav-item menu_mobile">
            <a class="nav-link" href="/">
                <ul class="sidelink">
                    <li>
                        <img src="assets/images/icons/home.svg" width="30px" class="img-default" alt="Dashboard"><img src="assets/images/icons/home-dark.svg" class="img-hover" alt="Início">
                    </li>
                    <li class="btn_description">
                        <p class="p-disabled">Início</p>
                    </li>
                </ul>
            </a>
        </li>
        <li class="nav-item menu_mobile">
            <a class="nav-link" href="/acoes">
                <ul class="sidelink">
                    <li>
                        <img class="icon_initial" src="assets/images/icons/acoes.svg" width="30px" alt="">
                    </li>
                    <li class="btn_description">
                        <p class="p-disabled">Ações</p>
                    </li>
                </ul>
            </a>
        </li>
        <li class="nav-item menu_mobile">
            <a class="nav-link" href="/inicio-das-distribuicoes">
                <ul class="sidelink">
                    <li>
                        <img class="icon_initial" src="assets/images/icons/distribuicao.svg" width="30px" alt="">
                    </li>
                    <li class="btn_description">
                        <p class="p-disabled">Distribuição</p>
                    </li>
                </ul>
            </a>
        </li>
        <li class="nav-item menu_mobile">
            <a class="nav-link" href="/meus-pedidos">
                <ul class="sidelink">
                    <li>
                        <img class="icon_initial" src="assets/images/icons/meuspedidos.svg" width="30px" alt="">
                    </li>
                    <li class="btn_description">
                        <p class="p-disabled" style="white-space:nowrap">Meus Pedidos</p>
                    </li>
                </ul>
            </a>
        </li>
        <li class="nav-item menu_mobile">
            <a class="nav-link" href="/">
                <ul class="sidelink">
                    <li>
                        <img class="icon_initial" src="assets/images/icons/institucional.svg" width="30px" alt="">
                    </li>
                    <li class="btn_description">
                        <p class="p-disabled">Institucional</p>
                    </li>
                </ul>
            </a>
        </li>
        <li class="nav-item menu_mobile">
            <a class="nav-link" href="/configuracoes">
                <ul class="sidelink">
                    <li>
                        <img class="icon_initial" src="assets/images/icons/configuracoes.svg" width="30px" alt="">
                    </li>
                    <li class="btn_description">
                        <p class="p-disabled">Configurações</p>
                    </li>
                </ul>
            </a>
        </li>
        <li class="nav-item menu_mobile">
            <button type="button" class="nav-link btn_unset" data-toggle="modal" data-target="#profileModal">
                <ul class="sidelink">
                    <li>
                        <img class="icon_initial" src="assets/images/icons/perfil.svg" width="30px" alt="">
                    </li>
                    <li class="btn_description">
                        <p class="p-disabled">Perfil</p>
                    </li>
                </ul>
            </button>
        </li>
        <li class="nav-item menu_mobile">
            <a class="nav-link" data-toggle="modal" data-target="#logoutConfirm">
                <ul class="sidelink">
                    <li>
                        <img class="icon_initial" src="assets/images/icons/sair.svg" width="30px" alt="">
                    </li>
                    <li class="btn_description">
                        <p class="p-disabled">Sair</p>
                    </li>
                </ul>
            </a>
        </li>
    </ul>
  </div>
</nav>


