@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base email_password">
	<div class="container-fluid pr-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo.svg" width="100px" alt="">
		</div>
		<div class="row full-height">
			<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 p-0 email_password-bg" >
			</div>
			<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 p-0">
				<div class="auth-wrap full-height">
					<div class="register-bg full-height bg_black_russian">
						<p class="auth_page_title">e-mail & senha</p>
						<div class="auth-content bg_nero color_white animated animatedFadeInUp fadeInUp">
							<div class="col-md-7 col-lg-7 col-xl-8 m-auto">
								<p class="auth_page_description">estamos <br> quase lá.</p>
								<div class="auth-form">
									<!-- <form action="" method="post"> -->
										<div class="form-group">
											<input class="au-input au-input--full input-auth" type="" name="" placeholder="e-mail">
										</div>
										<div class="form-group">
											<input class="au-input au-input--full input-auth" type="" name="" placeholder="confirmação de e-mail">
										</div>
										<div class="form-group">
											<input class="au-input au-input--full input-auth" type="password" name="password" value="" id="password-field" placeholder="senha">
											<span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
											<span class="field-icon_1"><i class="fas fa-info-circle"  data-toggle="tooltip" data-placement="bottom" data-html="true" 
											title=" <p><b>essa é a senha de acesso para <br> o aplicativo! </b> ela precisa conter <br>no mínimo de 8 caracteres, <br>1 letra maiuscula, 1 letra <br> minúsculae 1 número." id='passwordTooltip'></i></span>
										</div>
										<div class="form-group">
											<input class="au-input au-input--full input-auth" type="password" value="" id="" placeholder="confirmação de senha">
										</div>
										<div class="row btns-row ">
											<div class="col-md-6">
												<button class="au-btn au-btn--block btn-transparent m-b-20 " onclick="window.location.href='/endereco'">voltar</button>
											</div>
											<div class="col-md-6">
												<button class="au-btn au-btn--block btn-white m-b-20 "  onclick="window.location.href='/codigo-de-confirmacao'">confirmar</button>
											</div>
										</div>
									<!-- </form> -->
								</div>
							</div>

						</div>
					</div>
				</div>			
			</div>
		</div>
		<div class="copyright-auth">
			<p><small>Todos os direitos reservados - <b>bank</b></small></p>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
  $('#passwordTooltip').tooltip();
});
</script>
@endsection