<!-- HEADER DESKTOP-->
  <nav class="navbar navbar-expand-lg" id="topnav">
      <a class="navbar-brand" href="/admin">
        <img src="/assets/images/logo.svg" width="100px" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon span-nav">
          <i class="fas fa-bars"></i>
        </span>
        <span class="navbar-toggler-icon span-close">
          <i class="fas fa-times"></i>
        </span>
      </button>

      <span class="page_info">
        <p>Administrativo / Painel de acionista</p>
      </span>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="list-unstyled ml-auto">
            <li>
                <a class="btn_nav" href="/">
                    Modo acionista
                </a>

                <a class="btn_nav d-none" href="#">
                    Modo acionista
                </a>
                <span class="last_login">
                    <p>último acesso: {{ date ('d/m/Y')}}</p>
                </span>
            </li>
            <li class="nav-item menu_mobile">
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
            <li class="nav-item menu_mobile">
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
            <li class="nav-item menu_mobile">
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
            <li class="nav-item menu_mobile">
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
            <li class="nav-item menu_mobile">
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
            <li class="nav-item menu_mobile">
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
            <li class="nav-item menu_mobile">
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
            <li class="nav-item menu_mobile">
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


