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
				<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card rounder-corner">
								<div class="card-header rounder-top-corner">
									<h5 class="number">Total de ações</h5>
								</div>
								<div class="card-body">
									<input class="value au-input au-input--full input-auth" type="password" name="password" value="0" id="value-field" placeholder="" readonly>
									<span toggle="#value-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card rounder-corner">
								<div class="card-header rounder-top-corner">
									<h5 class="number">Preço por ação</h5>
								</div>
								<div class="card-body">
									<input class="value au-input au-input--full input-auth" type="password" name="password" value="R$0" id="percente-field" placeholder="" readonly>
									<span toggle="#percente-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card rounder-corner">
								<div class="card-header rounder-top-corner">
									<h5 class="number">Comprar ações</h5>	
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<label class="action_label" for="actions">Ações:</label>
											<input class="input_action" id="actions" type="text" placeholder="0">
										</div>			
										<div class="col-2 d-flex align-items-end justify-content-center">
											<p class="text-center"> X</p>
										</div>						
										<div class="col-5">
											<label class="action_label" for="value">Ações:</label>
											<input class="input_action" id="value" type="text" placeholder="0">
										</div>									
									</div>
									<form action="">
									<div class="row pt-4">
										<div class="col-4">
											<p class="pl-3">Forma de pagamento:</p>
										</div>
										<div class="col-8">
											<div class="row">
												<div class="col-6">
													<div class="radio-button">
														<label class="radio-button__label-wrapper" for="sharing_preference_standard">
														Transferência bancária
														<input type="radio" name="sharing_preference" id="sharing_preference_standard" value="standard" class="radio-button__input" checked="checked">
														<div class="radio-button__custom-indicator"></div>  </label>
													</div>
												</div>
												<div class="col-6">
													<div class="radio-button">
														<label class="radio-button__label-wrapper" for="sharing_preference_public">
														Boleto
														<input type="radio" name="sharing_preference" id="sharing_preference_public" value="public" class="radio-button__input">
														<div class="radio-button__custom-indicator"></div>    </label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-10 mx-auto">
											<small>
												<p class="text-center buy_warning">
													Ao gerar a fatura você deverá receber as instruções para o pagamento e para efetivar a sua compra 
													deverá realizar o pagamento,após isso você poderá gerenciar suas ações
												</p>
											</small>
										</div>
									</div>
									<div class="row mt-5 mb-4">
										<div class="mx-auto">
											<a class="btn_action_generate" href="/ordem-gerada">Gerar fatura e realizar pagamento</a>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner mnh-680">
						<div class="card-header rounder-top-corner">
							<h5>Ações</h5>	
						</div>
						<div class="card-body">
							<div class="card_empty w-100">
								<div class="row ">
									<div class="col-12 pb-4">
										<center>
											<img src="assets/images/icons/smile-black.svg" width="40px" alt=""><br>
										</center>
									</div>
									<div class="col-8 mx-auto">
									<small><p class="text-center">Nenhuma ação adquirida até o momento</p></small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
			
@endsection