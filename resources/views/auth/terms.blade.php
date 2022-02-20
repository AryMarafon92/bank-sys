@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base terms">
	<div class="container-fluid pr-0 full-height">	
		<div class="logo-auth">
			<img src="/assets/images/logo.svg" width="100px" alt="">
		</div>
		<div class="row full-height">
			<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 p-0 terms-bg">
			</div>
			<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12  p-0 media-height-50">
				<div class="auth-wrap full-height">
					<div class="auth-content bg_nero animated animatedFadeInRight fadeInRight">
						<div class="col-md-6 m-auto">
							<div class="description">
								<center>
									<p class="text-left color_white">declaro que li e concordo <br> com os <a href="" target="_blank"><b>termos de uso</b></a><br> e <a href="" target="_blank"><b>política de privacidade</b></a> <br> do bank.</p>
								</center>
							</div>					
						</div>
						<div class="col-md-6 m-auto mt-80">
							<div class="auth-form ">
								<form action="" method="post">
									<button class="au-btn au-btn--block btn-terms m-b-20 bg_white mt-auto" type="submit">concordo</button>
								</form>
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

@endsection