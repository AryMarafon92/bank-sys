@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base confirmation_code">
	<div class="container-fluid p-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo.svg" width="100px" alt="">
		</div>
		<div class="auth-content bg_degrade color_nero" >
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 m-auto pr-3 pl-3">
				<h1 class="auth_page_description text-right color_nero">muito <br> obrigado, <br> espero te ver <br> novamente <br>por aqui!</h1>
				<div class="row">
					<div class="col-12 btn_white_disable_account text-center" style="line-height:unset;">
						<a class=" color_nero w-100" href="/">sair</a>
					</div>
				</div>
			</div>

		</div>
		<div class="copyright-auth color_nero">
			<p><small>Todos os direitos reservados - <b>bank</b></small></p>
		</div>

		<div class="privacy">
			<ul class="privacy_ul color_nero">
				<li class="color_nero"><a href=""><small class="color_nero font-weight-normal">Legal</small></a></li>
				<li class="pr-1 pl-1 color_nero font-weight-normal">|</li>
				<li><a href=""><small class="color_nero font-weight-normal">Privacidade</small></a></li>
			</ul>
		</div>
	</div>
</div>

@endsection