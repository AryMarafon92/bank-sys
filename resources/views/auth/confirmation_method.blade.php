@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base confirmation_method">
	<div class="container-fluid p-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo-white.svg" width="100px" alt="">
		</div>
		<div class="auth-content bg_nero color_white">
			<div class="col-xl-3 col-lg-4 col-sm-6 m-auto pr-3 pl-3">
				<h1 class="auth_page_description">por qual<br> meio deseja <br> verificar a <br> sua conta?</h1>
				<div class="auth-form pt_55">
					<div class="form-group ">
						<a class="au-btn au-btn--block btn-transparent m-b-20  text-center" href="/email">verificar por e-mail</a>
					</div>
					<div class="form-group pb-5">
						<a class="au-btn au-btn--block btn-transparent m-b-20  text-center" href="/sms">verificar por sms</a>
					</div>
					<div class="form-group pt-5">
						<button class="au-btn au-btn--block btn-transparent m-b-20 " onclick="window.location.href='/recuperar-senha'">voltar</button>
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