@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base change_password">
	<div class="container-fluid p-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo-white.svg" width="100px" alt="">
		</div>
		<div class="auth-content bg_nero color_white">
			<div class="col-xl-3 col-lg-5 col-sm-6  m-auto pr-3 pl-3">
				<div class="auth_page_description">
					<h1>agora é <br> só trocar <br> a sua senha</h1>
					<span class="field-icon_1">
						<i class="fas fa-info-circle color_black_russian"  data-toggle="tooltip" data-placement="bottom" data-html="true" 
							title=" <p>a senha precisa conter <br> no mínimo de 8 caracteres, <br>1 letra maiuscula, 1 letra <br> minúsculae 1 número." id='changePasswordTooltip'>
						</i>
					</span>
					<p class="pt-4">lembre-se que <br> ela é para a sua <br>conta e não <br>para o cartão</p>
				</div>
				<div class="auth-form ">
					<form action="" method="post">
						<div class="form-group ">
							<input class="au-input au-input--full input-auth" type="password" name="password" value="" id="changePassword" placeholder="senha">
							<span toggle="#changePassword" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
						</div>
						<div class="form-group pb-5">
							<input class="au-input au-input--full input-auth" type="" name="" value="" id="" placeholder="confirmar nova senha" required>
						</div>
						
						<div class="form-group">
							<button class="au-btn au-btn--block btn-white m-b-20 " onclick="window.location.href='/senha-registrada'">confirmar</button>
						</div>
					</form>
					<div class="form-group">
						<a class="au-btn au-btn--block btn-transparent m-b-20 text-center" href="/metodo-de-confirmacao">voltar</a>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-auth color_white">
			<p><small>Copyright {{ date ('Y')}} bank. Todos os direitos reservados. CNPJ: 00.000.000/0000-00</small></p>
		</div>
		<div class="privacy">
			<ul class="privacy_ul">
				<li class=""><a href=""><small>Legal</small></a></li>
				<li class="pr-1 pl-1 color_white">|</li>
				<li><a href=""><small>Privacidade</small></a></li>
			</ul>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
  $('#changePasswordTooltip').tooltip();
});
</script>

@endsection