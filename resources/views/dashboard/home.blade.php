@extends('dashboard/layouts.default')

@section('title')
@parent
@stop

@section('content')
<div class="dashboard-ecommerce">
	<div class="container-fluid dashboard-content ">

		<!-- pageheader  -->
		<div class="row mb-5">
			<div class="col-md-6 ">
				<p class="user_name color_white">bom dia, 
					<span>user!</span>
				</p>
			</div>
			<div class="col-md-6 ">
				<p class="small_right float-right"><small>Compra minima inicial = 50.000 ações (R$1,00 = ação)</small></p>
			</div>
		</div>
		<!-- end pageheader  -->

		<div class="dashboard_base">
			<div class="row">
				<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner">
						<div class="card-header rounder-top-corner">
							<h5 class="number">Posição acionária</h5>
						</div>
						<div class="card-body">
							<input class="value au-input au-input--full input-auth" type="password" name="password" value="R$0.00" id="value-field" placeholder="" readonly>
							<span toggle="#value-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner">
						<div class="card-header rounder-top-corner">
							<h5 class="number">Crescimento no último mês</h5>
							<p>(A partir 02/21)</p>
						</div>
						<div class="card-body">
							<input class="value au-input au-input--full input-auth" type="password" name="password" value="0.00%" id="percente-field" placeholder="" readonly>
							<span toggle="#percente-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner">
						<div class="card-header rounder-top-corner">
							<h5 class="number">Quantidade de ações</h5>	
						</div>
						<div class="card-body">
							<input class="value au-input au-input--full input-auth" type="password" name="password" value="0" id="quantity-field" placeholder="" readonly>
							<span toggle="#quantity-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner">
						<div class="card-header rounder-top-corner">
							<h5>Notícias</h5>	
						</div>
						<div class="card-body">
							<small><p class="pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quasi natus velit optio</p></small>
							<img src="https://via.placeholder.com/320x200" width="100%" alt="">
							<small class="text-gray">Lorem ipsum dolor sit amet consectetur</small>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner">
						<div class="card-header rounder-top-corner">
							<h5>Nosso caminho para sermos <br> o seu banco digital completo!</h5>
						</div>
						<div class="card-body">
							<h4 class="card-title year_title">2020</h4>
							<ul class="timeline timeline-vertical">
								<li>
									<div class="timeline--circle">        
											<i></i>
									</div>
									<div class="timeline--description">
										Estruturação
									</div>
								</li>
								
								<li>
									<div class="timeline--circle">        
											<i></i>
									</div>
									<div class="timeline--description">
										Marketing
									</div>
								</li>
								
								<li>
									<div class="timeline--circle">        
										<i></i>
									</div>
									<div class="timeline--description">
										Estrutura Tecnológica
									</div>
								</li>
								
								<li>
									<div class="timeline--circle">        
										<i></i>
									</div>
									<div class="timeline--description">
										Estrutura Organizacional
									</div>
								</li>
								
								<li>
									<div class="timeline--circle">        
										<i></i>
									</div>
									<div class="timeline--description">
										Segurança
									</div>
								</li>
								
								<li>
									<div class="timeline--circle">        
										<i></i>
									</div>
									<div class="timeline--description">
										Design de plataformas
									</div>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner">
						<div class="card-body">
							<p><b>@bankdigital</b></p>
							<img class="pb-3" src="https://via.placeholder.com/320x300" width="100%" alt="">
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
			
@endsection