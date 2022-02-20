@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base change_password change_password_method">
	<div class="container-fluid p-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo-white.svg" width="100px" alt="">
		</div>
		<div class="auth-content bg_nero color_white">
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-auto pr-5 pl-5">
				<div class="auth_page_description">
					<h1>por qual <br> meio deseja <br> verificar a <br>sua conta?</h1>
				</div>
				<div class="auth-form ">						
					<div class="form-group">
						<a href="/email" class="au-btn au-btn--block btn-transparent m-b-20 text-center">verificar por e-mail</a>
					</div>
					<div class="form-group mb-5 pb-5">
						<a href="/sms" class="au-btn au-btn--block btn-transparent m-b-20 text-center">verificar por sms</a>
					</div>
					<div class="form-group">
						<a class="au-btn au-btn--block btn-transparent m-b-20 text-center" href="">voltar</a>
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