<!--Profile Modal -->
<div class="modal left fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="float-left" src="assets/images/icons/close.svg" width="15px" alt=""></button>
      </div>

      <div class="modal-body">
        <div class="container-fluid">
          <center>
            <img class="icon_initial" src="assets/images/icons/qr-code.svg" width="100px" alt="">
          </center>
          <div class="row pb-5">
            <div class="col-12 pt-4">
              <p class="text-center"><small> banco <b>000 - bank</b></small></p>
            </div>
            <div class="col-12 ">
              <div class="row">
                <div class="col-6">
                    <p class="text-right"><small> agência <b>0001</b></small></p>
                </div>
                <div class="col-6">
                  <p class=""><small>conta <b>000000</b></small></p>
                </div>
              </div>
              <div class="row">
                <div class="col-3 offset-7">
                  <button class="btn_unset">
                    <img src="assets/images/icons/copy.svg" width="20px" alt="">
                  </button>
                  <button class="btn_unset">
                    <img src="assets/images/icons/share.svg" width="20px" alt="">
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <a href="/conta" class="btn_profile">configurar minha conta</a href="#">
            <a href="/perfil" class="btn_profile bt_unset">configurar meu perfil</a href="#">
          </div>
          <div class="row mt-5 pt-5">
            <div class="col-10 mx-auto">
              <center>
                <a class="btn_logout" href="#">sair da conta</a>
              </center>
            </div>
          </div>
        </div>
      </div>

    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div>
<!-- Profile Modal -->

<!-- Notification sidebar -->
<div class="modal right fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img class="float-left" src="assets/images/icons/close.svg" width="25px" alt=""> <img class="float-right" src="assets/images/icons/notification.svg" width="25px" alt=""></button>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-12">	
            <div class="container">
              <div class="notification_card empty_notification">
                <div class="row ">
                  <div class="col-12 pb-4">
                      <center>
                          <img src="assets/images/icons/smile-black.svg" width="40px" alt=""><br>
                      </center>
                  </div>
                  <div class="col-12 ">
                    <small>
                      <p class="text-center">você não tem notificações</p>
                    </small>
                  </div>
                </div>
              </div>
              <div class="notification_card">
                <div class="row">
                  <div class="col-6">
                      <p><small class="color_gray">01 Mar</small></p>
                  </div>
                  <div class="col-6">
                      <img class="float-right" src="assets/images/icons/close.svg" width="10px" alt="">
                  </div>
                </div>
                <div class="row ">
                  <div class="col-12 pb-4">
                    <h6 class="color_white">Fale conosco sobre sua experiência</h6>
                  </div>
                  <div class="col-12 ">
                    <small>
                      <p>temos uma <u>pequena pesquisa</u>, isso nos ajuda a entender o que temos feito bem e o que poderíamos estar fazendo melhor.</p>
                    </small>
                  </div>
                </div>
              </div>
              <div class="notification_card">
                  <div class="row">
                      <div class="col-6">
                          <p><small class="color_gray">01 Mar</small></p>
                      </div>
                      <div class="col-6">
                          <img class="float-right" src="assets/images/icons/close.svg" width="10px" alt="">
                      </div>
                  </div>
                  <div class="row ">
                      <div class="col-12 pb-4">
                          <h6 class="color_white">Não esqueça de pagar a <br> transferência para João</h6>
                      </div>
                      <div class="col-12 ">
                      <small><p><u>Clique aqui e pague</u></p></small>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div>
<!-- Notification sidebar -->

<!-- Confirmação  de alteração-->
<div class="modal fade" id="cofirmationModalAdmin" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <center>
          <img src="assets/images/icons/smile-white.svg" width="80px" alt="" style="box-shadow: 1px 1px 10px #000000;border-radius: 50px;"><br>
        </center>
      </div>
      <div class="modal-body">
        <h1 class="text-center">você está certo que <br> deseja fazer essa ação?</h1>
        <div class="row mt-5">
          <button type="button" class="btn_unset btn_transparent_modal ml-auto mr-3" data-dismiss="modal">não</button>
          <button type="button" class="btn_unset btn_white_modal mr-auto ml-3">sim</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Confirmação  de alteração-->

<!-- Aviso de alteração feita -->
<div class="modal fade" id="editModalConfirmation" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body mx-auto">
        <div class="col-3 mx-auto" >
          <img class="mx-auto pb-4" src="assets/images/icons/smile-black.svg" width="50px" alt="">
        </div>
        <h5 class="text-center modal_black_description ">alterações salvas!</h5>
      </div>
    </div>
  </div>
</div>
<!-- Aviso de alteração feita -->

<!-- Senha para editar perfil -->
<div class="modal fade" id="editProfilePassword" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounder-corner">
      <div class="modal-body mx-auto d-flex align-items-center justify-content-center p-5">
        <div class="row">
          <div class="col-lg-12 mb-3">
            <label for="" class="d-flex pl-3">digite sua senha</label>
            <input class="value input_border position-relative" type="password" name="password" value="" id="value-personalinfo" placeholder="" readonly>
            <span toggle="#value-personalinfo" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
          </div>
          <div class="col-lg-12 d-flex justify-content-center">
            <a class="btn_border mr-2" href="">cancelar</a>
            <a class="btn_gray" href="">confirmar</a>
          </div>
        </div>        
      </div>
    </div>
  </div>
</div>
<!-- Senha para editar perfil -->

<!-- Logout Confirm -->
<div class="modal fade" id="logoutConfirm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounder-corner bg_black_russian">
      <div class="modal-body mx-auto d-flex align-items-center justify-content-center p-5">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="top: 25px;position: absolute;left: 30px;">
          <img class="float-left" src="assets/images/icons/close.svg" width="25px" alt=""> 
        </button>
        <div class="row">
          <div class="col-lg-12 mb-3">
            <center>
                <img src="assets/images/icons/smile-white.svg" width="40px" alt=""><br>
            </center>
            <p class="bg_nero color_white text-center w-75 mx-auto mt-4 mb-3 pt-2 pb-2">deseja sair da sua conta?</p>
          </div>
          <div class="col-lg-12 d-inline-flex ">
            <a class="btn_border_white mr-2" href="">sair</a>
            <a class="btn_white" href="" style="white-space:nowrap">não sair</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Logout Confirm -->

<!-- Modal Resend -->
<div class="modal fade modal_confirmation" id="modalResend" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="container">
					<div class="row">
						<div class="col-md-10 pb-4 m-auto">
							<center>
								<img class="pb-4 pt-5" src="/assets/images/icons/smile-black.svg" width="50px" alt="">	
							</center>
							<p class="modal_description">reenviamos o código</p>				
							<p class="modal_description mr-3 ml-3">para o seu e-mail</p>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Session Expired -->
<div class="modal fade modal_expired" id="modalSessionExpired" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="container">
					<div class="row">
						<div class="col-md-12 pb-4 m-auto">
							<center>
								<img class="pb-4 pt-5" src="/assets/images/icons/smile-black.svg" width="50px" alt="">	
							</center>
							<p class="modal_description mr-4 ml-4 mb-0">seu acesso expirou.</p>	
							<p class="modal_description pr-1 pl-1">acesse novamente para continuar.</p>				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Session Expired -->

