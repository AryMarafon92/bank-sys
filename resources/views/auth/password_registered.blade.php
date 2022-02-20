@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base password_registered">
	<div class="container-fluid p-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo-white.svg" width="100px" alt="">
		</div>
		<div class="auth-content bg_nero color_white">
			<div class="col-lg-4 col-md-5 ml-auto pr-5">
                <h1 class="auth_page_description">nova <br> senha <br> registrada!</h1>
                <div class="pt_55">
                    <a class="au-btn au-btn--block btn-white m-b-20 text-center " href="/login">fazer login</a>
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