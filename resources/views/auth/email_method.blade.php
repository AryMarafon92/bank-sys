@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base email_method">
	<div class="container-fluid p-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo-white.svg" width="100px" alt="">
		</div>
		<div class="auth-content bg_nero color_white">
			<div class="col-xl-3 col-lg-4 col-sm-6 m-auto pr-3 pl-3">
				<h3 class="auth_page_description">enviamos seu código <br> para o e-mail para <br> redefinir sua senha.</h3>
				<div class="auth-form pt_35">
					<form action="" method="post">
						<div class="form-group pb-3">
							<input class="au-input au-input--full input-auth" type="" name="" value="" id="emailCode" placeholder="código" required>
							<center>
								<a class="btn-resend_code m-auto pt-2" href=""><small>reenviar código</small></a>
							</center>
						</div>
						
						<div class="form-group">
							<button class="au-btn au-btn--block btn-white m-b-20 " onclick="window.location.href='/mudar-senha'">trocas senha</button>
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

@endsection