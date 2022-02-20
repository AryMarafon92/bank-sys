@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base login">
	<div class="container-fluid pr-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo-white.svg" width="100px" alt="">
		</div>
		<div class="row full-height">
			<div class="col-xl-6 col-md-12 p-0 login_bg" >
			</div>
			<div class="col-xl-6 col-md-12 p-0 ">
				<span class="absolute animated animatedFadeInDown fadeInDown">
					<img src="../assets/images/span_login.png" width="100%" alt=""> 
				</span>
				<div class="auth-content bg_nero color_white pt_55">
					<div class="col-md-7 m-auto">
						<div class="auth-form">
							<!-- <form action="" method="post"> -->
								<div class="row">
									<div class="col-md-10 m-auto">
										<div class="form-group">
											<input class="au-input au-input--full  input-auth" type="" name="" placeholder="e-mail" required>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input class="au-input au-input--full  input-auth" type="" name="" placeholder="token" required>
												</div>
												<div class="col-md-6">
													<button class="au-btn au-btn--block btn-white m-b-20 pl-1 pr-1" type="submit">solicitar token</button>
												</div>
											</div>
										</div>
										<div class="form-group pb-3">
											<input class="au-input au-input--full input-auth" type="password" name="password" value="" id="password-field" placeholder="senha" required>
											<span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
											<center>
												<a class="btn-recover m-auto pt-3" href="/recuperar-senha"><small>recuperar senha</small></a>
											</center>
										</div>
										<div class="form-group pt-5">
											<button class="au-btn au-btn--block btn-white m-b-20 " onclick="window.location.href='/'">acessar conta</button>
										</div>

										<center>
											<a class="btn-recover m-auto mt-4 pt-5" href="/registro">registrar-se</a>
										</center>
									</div>
								</div>
							<!-- </form> -->
						</div>
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