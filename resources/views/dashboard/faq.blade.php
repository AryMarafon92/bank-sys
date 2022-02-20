@extends('auth/layouts.default')

@section('title')
@parent
@stop

@section('content')

<div class="page-content--base faq">
	<div class="container-fluid p-0 full-height">
		<div class="logo-auth">
			<img src="/assets/images/logo.svg" width="100px" alt="">
		</div>
		<div class="auth-content bg_white color_nero" >
			<div class="row">				
				<div class="col-md-4 pr-5 pl-5" style="padding-left:5rem!important">
					<h1 class="color_nero font-weight-bold">esclareça suas <br> dúvidas aqui!</h1>
				</div>
				<div class="col-md-4 pr-5 pl-5">
					<!-- Search form -->
					<form class="form-inline active-pink-3 active-pink-4 mb-3">
						<input class="form-control form-control-sm w-100 search_faq" type="text" placeholder="Qual é a sua dúvida?"
							aria-label="Search">
						<i class="fas fa-search" aria-hidden="true"style="right: 15%;position: absolute;"></i>
					</form>
					<!--Accordion wrapper-->
					<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

						<!-- Accordion card -->
						<div class="card">
							<!-- Card header -->
							<div class="card-header d-flex align-items-center" role="tab" id="headingOne1">
								<a class="w-100 " data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
									<h5 class="mb-0 color_black_russian">
										Por que não consigo fazer <br> transferências agora? 
									<span style="color: var(--color-gray)!important;float:right;margin-top: -20px;"> <i class="fas fa-sort-down fa-2x rotate-icon"></i></span>
									</h5>										
								</a>
							</div>
							<!-- Card body -->
							<div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1"
								data-parent="#accordionEx">
								<div class="card-body">
								Assim como nas outras funcionalidades, queremos que você conheça primeiro o jeito de cuidar do seu dinheiro, para depois poder fazer o que quiser com ele dentro da sua conta digital!
								</div>
							</div>
						</div>
						<!-- Accordion card -->

						<!-- Accordion card -->
						<div class="card">
							<!-- Card header -->
							<div class="card-header d-flex align-items-center" role="tab" id="headingTwo2">
								<a class="w-100 collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
									<h5 class="mb-0 color_black_russian">
										Vai ter cartão 
									<span style="color: var(--color-gray)!important;float:right;margin-top: -10px;"> <i class="fas fa-sort-down fa-2x rotate-icon"></i></span>
									</h5>										
								</a>
							</div>
							<!-- Card body -->
							<div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
								data-parent="#accordionEx">
								<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
								wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
								eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
								assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
								nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
								farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
								labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- Accordion card -->

						<!-- Accordion card -->
						<div class="card">
							<!-- Card header -->
							<div class="card-header d-flex align-items-center" role="tab" id="headingThree3">
								<a class="w-100 collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
									<h5 class="mb-0 color_black_russian">
										É seguro mesmo? 
									<span style="color: var(--color-gray)!important;float:right;margin-top: -10px;"> <i class="fas fa-sort-down fa-2x rotate-icon"></i></span>
									</h5>										
								</a>
							</div>
							<!-- Card body -->
							<div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
								data-parent="#accordionEx">
								<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
								wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
								eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
								assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
								nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
								farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
								labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- Accordion card -->

						<!-- Accordion card -->
						<div class="card">
							<!-- Card header -->
							<div class="card-header d-flex align-items-center" role="tab" id="headingFour4">
								<a class="w-100 collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour4">
									<h5 class="mb-0 color_black_russian">
										Por que é de graça <br>e não tem taxas? 
									<span style="color: var(--color-gray)!important;float:right;margin-top: -20px;"> <i class="fas fa-sort-down fa-2x rotate-icon"></i></span>
									</h5>										
								</a>
							</div>
							<!-- Card body -->
							<div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4"
								data-parent="#accordionEx">
								<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
								wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
								eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
								assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
								nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
								farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
								labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- Accordion card -->

						<!-- Accordion card -->
						<div class="card">
							<!-- Card header -->
							<div class="card-header d-flex align-items-center" role="tab" id="headingFive5">
								<a class="w-100 collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
									<h5 class="mb-0 color_black_russian">
										Por que ainda não tenho o <br> número de conta e agência?
									<span style="color: var(--color-gray)!important;float:right;margin-top: -20px;"> <i class="fas fa-sort-down fa-2x rotate-icon"></i></span>
									</h5>										
								</a>
							</div>
							<!-- Card body -->
							<div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5"
								data-parent="#accordionEx">
								<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
								wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
								eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
								assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
								nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
								farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
								labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- Accordion card -->

						<!-- Accordion card -->
						<div class="card">
							<!-- Card header -->
							<div class="card-header d-flex align-items-center" role="tab" id="headingSix6">
								<a class="w-100 collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
									<h5 class="mb-0 color_black_russian">
										É igual a um banco normal? 
									<span style="color: var(--color-gray)!important;float:right;margin-top: -10px;"> <i class="fas fa-sort-down fa-2x rotate-icon"></i></span>
									</h5>										
								</a>
							</div>
							<!-- Card body -->
							<div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingSix6"
								data-parent="#accordionEx">
								<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
								wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
								eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
								assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
								nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
								farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
								labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- Accordion card -->

						<!-- Accordion card -->
						<div class="card">
							<!-- Card header -->
							<div class="card-header d-flex align-items-center" role="tab" id="headingSeven7">
								<a class="w-100 collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseSeven7" aria-expanded="false" aria-controls="collapseSeven7">
									<h5 class="mb-0 color_black_russian">
										Como poderei usar minha <br> conta 24h por dia? 
									<span style="color: var(--color-gray)!important;float:right;margin-top: -20px;"> <i class="fas fa-sort-down fa-2x rotate-icon"></i></span>
									</h5>										
								</a>
							</div>
							<!-- Card body -->
							<div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7"
								data-parent="#accordionEx">
								<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
								wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
								eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
								assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
								nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
								farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
								labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- Accordion card -->

					</div>
					<!-- Accordion wrapper -->
					<div class="row pb-5 pt-5 w-50 mx-auto">
						<!-- <div class="col-6 pt-5 pb-5 mx-auto"> -->
							<a href="/" class="btn_border">voltar</a>
						<!-- </div> -->
					</div>
				</div>
				<div class="col-md-4 pr-5 pl-5 d-flex align-items-end justify-content-end">
					<ul class="mr-5"> 
						<li>
							<img src="/assets/images/icons/smile-white.svg" width="40px" alt="">
						</li>
						<li>Ainda ficou com dúvida? <br> 
							<a href=""><u>Entre em contato</u></a>
						</li>
					</ul>
				</div>
			</div>

		</div>
		<div class="copyright-auth color_nero">
			<p><small>Todos os direitos reservados - <b>bank</b></small></p>
		</div>
	</div>
</div>


@endsection