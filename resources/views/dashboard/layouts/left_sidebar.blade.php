<div class="nav-left-sidebar " >
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light mx-auto">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-auto h-100" id="navbarNav">
                <ul class="navbar-nav flex-column mx-auto" style="height: 100%;display: grid;><!-- " -->
                    <li class="nav-item ">
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
                    <li class="nav-item ">
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
                    <li class="nav-item ">
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
                    <li class="nav-item ">
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
                    <li class="nav-item ">
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
                    <li class="nav-item ">
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
                    <li class="nav-item ">
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
                    <li class="nav-item ">
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
    </div>
</div>


<style>
.sidebar_drop{display:none}
.nav-item:hover .sidebar_drop{display:block;position:absolute}
.btn_description{display: flex;flex-direction: row;align-items: center;}
</style>

