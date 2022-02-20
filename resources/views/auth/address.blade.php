@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base address">
	<div class="container-fluid pr-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo.svg" width="100px" alt="">
		</div>
		<div class="row full-height">
			<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 p-0 address-bg" >
			</div>
			<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 p-0" >
				<div class="auth-wrap full-height">
					<div class="register-bg full-height bg_black_russian">
						<p class="auth_page_title">endereço</p>
						<div class="auth-content bg_nero color_white animated animatedFadeInUp fadeInUp">
							<div class="col-md-7 col-lg-7 col-xl-9  m-auto">
								<p class="auth_page_description">todas as informações que <br> você disponibilizar por <br> aqui ficarão armazenadas <br>e não serão divulgadas,<br> não se preocupe.</p>
								<div class="auth-form">
									<!-- <form action="" method="post"> -->
										<div class="form-group">
											<input class="au-input au-input--full input-auth" type="" name="" placeholder="CEP">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6 pr_input">
													<input class="au-input au-input--full input-auth" type="" name="" placeholder="estado">
												</div>
												<div class="col-md-6 pl_input">
													<input class="au-input au-input--full input-auth" type="" name="" placeholder="cidade">
												</div>
											</div>
										</div>
										<div class="form-group">
											<input class="au-input au-input--full input-auth" type="" name="" placeholder="bairro">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-8 pr_input">
													<input class="au-input au-input--full input-auth" type="" name="" placeholder="rua">
												</div>
												<div class="col-md-4 pl_input">
													<input class="au-input au-input--full input-auth" type="" name="" placeholder="n&#186;">
												</div>
											</div>
										</div>
										<div class="form-group">
											<input class="au-input au-input--full input-auth" type="" name="" placeholder="complemento">
										</div>
										<div class="row pt-4">
											<div class="col-md-6">
												<button class="au-btn au-btn--block btn-transparent m-b-20 " onclick="window.location.href='/informacoes-complementares'"> voltar</button>
											</div>
											<div class="col-md-6">
												<button class="au-btn au-btn--block btn-white m-b-20 "  onclick="window.location.href='/email-e-senha'">confirmar</button>
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
		<div class="copyright-auth color">
			<p><small>Todos os direitos reservados - <b>bank</b></small></p>
		</div>
	</div>
</div>

@endsection