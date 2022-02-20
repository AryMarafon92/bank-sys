@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base confirmation_code">
	<div class="container-fluid p-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo-white.svg" width="100px" alt="">
		</div>
		<div class="auth-content bg_nero color_white">
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 m-auto pr-0 pl-0">
				<h1 class="auth_page_description pr-3 mr-2">enviamos o <br> seu código de <br>confirmação <br>para o e-mail.</h1>
				<div class="auth-form">
					<!-- <form action="" method="post"> -->
						<div class="form-group pb-4">
							<input class="au-input au-input--full  input-auth" type="" name="" placeholder="código">
							<center>
								<a class="btn-resend m-auto" href="" data-toggle="modal" data-target="#modalResend"><small>reenviar código</small></a>
							</center>
						</div>
						<div class="form-group">
							<button class="au-btn au-btn--block btn-white m-b-20 " onclick="window.location.href='/'">confirmar</button>
						</div>
						<div class="form-group">
							<button class="au-btn au-btn--block btn-transparent m-b-20 " onclick="window.location.href='/email-e-senha'">voltar</button>
						</div>
					<!-- </form> -->
				</div>
			</div>

		</div>
		<div class="copyright-auth color_white">
			<p><small>Todos os direitos reservados - <b>bank</b></small></p>
		</div>
	</div>
</div>

@endsection