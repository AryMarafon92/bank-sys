@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base personal_information">
	<div class="container-fluid pr-0 full-height">
		<div class="row full-height">
			<div class="col-md-7 p-0 " >
				<div class="logo-auth">
					<img src="/assets/images/logo.svg" width="100px" alt="">
				</div>
				<div class="copyright-auth">
					<p><small>Todos os direitos reservados - <b>bank</b></small></p>
				</div>
			</div>
			<div class="col-md-5 p-0">
				<div class="register-bg full-height bg_black_russian">
					<p class="auth_page_title">informações <br> pessoais</p>
					<div class="auth-content bg_nero color_white animated animatedFadeInUp fadeInUp">
						<div class="col-md-7 m-auto">
							<p class="auth_page_description">User, só precisamos de algumas informações para efetuar seu cadastro.</p>
							<div class="auth-form">
								<form action="" method="post">
									<div class="form-group">
										<input class="au-input au-input--full  input-auth" type="" name="" placeholder="nome completo">
									</div>
									<div class="form-group">
										<input class="au-input au-input--full  input-auth" type="" name="" placeholder="data de nascimento">
									</div>
									<div class="form-group">
										<input class="au-input au-input--full  input-auth" type="" name="" placeholder="cpf">
									</div>
									<div class="form-group">
										<input class="au-input au-input--full  input-auth" type="" name="" placeholder="rg">
									</div>
									<div class="form-group">
										<input class="au-input au-input--full  input-auth" type="" name="" placeholder="data de emissão">
									</div>
									<div class="form-group">
										<input class="au-input au-input--full  input-auth" type="" name="" placeholder="orgão expedidor">
									</div>
									<div class="row pt-1">
										<div class="col-md-6">
											<label class="switch float-right">
												<input type="checkbox">
												<span class="slider round"></span>
											</label>
										</div>
										<div class="col-md-6">
											<p class="checkbox_description text-right"><small>receber informações <br> da minha conta por SMS</small></p>
										</div>
									</div>
									<div class="row pt-4">
										<div class="col-md-6">
											<button class="au-btn au-btn--block btn-transparent m-b-20 " type="submit">voltar</button>
										</div>
										<div class="col-md-6">
											<button class="au-btn au-btn--block btn-white m-b-20 " type="submit">confirmar</button>
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection