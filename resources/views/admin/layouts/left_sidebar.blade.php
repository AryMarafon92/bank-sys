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
                        <a class="nav-link" href="/admin">
                            <ul class="sidelink">
                                <li>
                                    <img src="assets/images/icons/home-dark.svg" width="30px" alt="Dashboard">
                                </li>
                                <li class="btn_description">
                                    <p class="p-disabled">Início</p>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/investidores">
                            <ul class="sidelink">
                                <li>
                                    <img class="icon_initial" src="assets/images/icons/investidores.svg" width="30px" alt="">
                                </li>
                                <li class="btn_description">
                                    <p class="p-disabled">Investidores</p>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/pedidos-pendentes">
                            <ul class="sidelink">
                                <li>
                                    <img class="icon_initial" src="assets/images/icons/pendente.svg" width="30px" alt="">
                                </li>
                                <li class="btn_description">
                                    <p class="p-disabled" style="white-space:nowrap">Pedidos Pendentes</p>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/pedidos-pagos">
                            <ul class="sidelink">
                                <li>
                                    <img class="icon_initial" src="assets/images/icons/confirmado.svg" width="30px" alt="">
                                </li>
                                <li class="btn_description">
                                    <p class="p-disabled" style="white-space:nowrap">Pedidos Pagos</p>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/pedidos-cancelados">
                            <ul class="sidelink">
                                <li>
                                    <img class="icon_initial" src="assets/images/icons/cancelado.svg" width="30px" alt="">
                                </li>
                                <li class="btn_description">
                                    <p class="p-disabled" style="white-space:nowrap">Pedidos Cancelados</p>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/acoes-vendidas">
                            <ul class="sidelink">
                                <li>
                                    <img class="icon_initial" src="assets/images/icons/acoes-vendidas.svg" width="30px" alt="">
                                </li>
                                <li class="btn_description">
                                    <p class="p-disabled" style="white-space:nowrap">Ações Vendidas</p>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/rendimentos">
                            <ul class="sidelink">
                                <li>
                                    <img class="icon_initial" src="assets/images/icons/rendimentos.svg" width="30px" alt="">
                                </li>
                                <li class="btn_description">
                                    <p class="p-disabled">Rendimentos</p>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/saques">
                            <ul class="sidelink">
                                <li>
                                    <img class="icon_initial" src="assets/images/icons/saques.svg" width="30px" alt="">
                                </li>
                                <li class="btn_description">
                                    <p class="p-disabled">Saques</p>
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
                        <a class="nav-link" href="/login">
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

