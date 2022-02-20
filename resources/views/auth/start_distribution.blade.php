@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')


<div class="page-content--base start_distribution">
	<div class="container-fluid p-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo-white.svg" width="100px" alt="">
		</div>
		<div class="auth-content bg_nero color_white">
			<div class="bg_black_russian start_distribution_content animated animatedFadeInUp fadeInUp  d-flex align-items-center justify-content-center">
				<span><a href="/"><img class="float-left" src="assets/images/icons/close.svg" width="15px" alt=""></a></span>
				<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 ml-auto pr-5">
					<h1 class="auth_page_description">Início das <br>distribuições</h1>
					<p class="pt-5">1 de janeiro de 2020</p>
					<a class="au-btn au-btn--block btn-transparent m-b-20 text-center " href="/login">Saber mais sobre</a>
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