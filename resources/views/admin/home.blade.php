@extends('admin/layouts.default')

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

		<div class="dashboard_base admin">
			<div class="row">
				<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card rounder-corner">
								<div class="card-header rounder-top-corner">
									<div class="row">
										<div class="col-4 pr-0 d-flex align-items-center">
											<h5>Pré cadastrar novo investidor</h5>	
										</div>
										<div class="col-8 ">
											<small>
												<p class="text-center buy_warning">
													Para cadastrar um novo investidor, deve informar o e-mail <br> abaixo e o sistema irá enviar um link para finalização do cadastro
												</p>
											</small>
										</div>
									</div>
								</div>
								<div class="card-body">
									<form action="">
										<div class="row">
											<div class="col-7">
												<input class="pre_register" type="email" placeholder="E-mail do investidor">
											</div>
											<div class="col-5">
												<input class="btn_black" type="submit" value="Enviar">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="row">
								<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="card rounder-corner custom_card_padding ">
												<div class="card-header rounder-top-corner">
													<h5 class="number">Disponível para venda</h5>
												</div>
												<div class="card-body">
													<input class="value au-input au-input--full input-auth" type="password" name="password" value="R$0.00" id="value-field1" placeholder="" readonly>
													<span toggle="#value-field1" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
												</div>
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="card rounder-corner custom_card_padding ">
												<div class="card-header rounder-top-corner">
													<h5 class="number">Investidores cadastrados</h5>
												</div>
												<div class="card-body">
													<input class="value au-input au-input--full input-auth" type="password" name="password" value="0" id="value-field2" placeholder="" readonly>
													<span toggle="#value-field2" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
												</div>
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="card rounder-corner custom_card_padding ">
												<div class="card-header rounder-top-corner">
													<h5 class="number">Cotas vendidas</h5>
												</div>
												<div class="card-body">
													<input class="value au-input au-input--full input-auth" type="password" name="password" value="R$0" id="value-field3" placeholder="" readonly>
													<span toggle="#value-field3" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
												</div>
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="card rounder-corner custom_card_padding ">
												<div class="card-header rounder-top-corner">
													<h5 class="number">Ações vendidas</h5>
												</div>
												<div class="card-body">
													<input class="value au-input au-input--full input-auth" type="password" name="password" value="0" id="value-field4" placeholder="" readonly>
													<span toggle="#value-field4" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="card rounder-corner mnh-485">
										<div class="card-header rounder-top-corner">
											<h5>Ultimos rendimentos</h5>
										</div>
										<div class="card-body">
											<div class="empty_actions mb-4">
												<div class="row ">
													<div class="col-12 pb-4">
														<center>
															<img src="assets/images/icons/smile-black.svg" width="40px" alt=""><br>
														</center>
													</div>
													<div class="col-8 mx-auto">
													<p class="text-center">Nenhum rendimento recebido no momento</p>
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
				<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 right_table">
					<div class="card rounder-corner mnh-600">
						<div class="card-header rounder-top-corner">
							<h5 class="number">Ações Vendidas Recentes</h5>
						</div>
						<div class="card-body">
							<div class="table_wrapper">
								<table id="table_soldActions" class="display nowrap recent_sold_action" style="width:100%">
									<thead>
										<tr>
											<th class="text-center">ID</th>
											<th class="text-center">Cotas</th>
											<th class="text-center">Valor Final</th>
											<th class="text-center">Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-center" width=" 27%">911956c594bc</td>
											<td class="text-center" width=" 13%">000</td>
											<td class="text-center" width=" 30%">R$ 00.000,00</td>
											<td class="text-center" width=" 30%">Ativo <span class="span_status"><img src="assets/images/icons/confirmado.svg" width="25px" alt=""></span></td>
										</tr>
										<tr>
											<td class="text-center" width=" 27%">911956c594bc</td>
											<td class="text-center" width=" 13%">000</td>
											<td class="text-center" width=" 30%">R$ 00.000,00</td>
											<td class="text-center" width=" 30%">Ativo <span class="span_status"><img src="assets/images/icons/confirmado.svg" width="25px" alt=""></span></td>
										</tr>
										<tr>
											<td class="text-center" width=" 27%">911956c594bc</td>
											<td class="text-center" width=" 13%">000</td>
											<td class="text-center" width=" 30%">R$ 00.000,00</td>
											<td class="text-center" width=" 30%">Ativo <span class="span_status"><img src="assets/images/icons/confirmado.svg" width="25px" alt=""></span></td>
										</tr>
										<tr>
											<td class="text-center" width=" 27%">911956c594bc</td>
											<td class="text-center" width=" 13%">000</td>
											<td class="text-center" width=" 30%">R$ 00.000,00</td>
											<td class="text-center" width=" 30%">Ativo <span class="span_status"><img src="assets/images/icons/confirmado.svg" width="25px" alt=""></span></td>
										</tr>
										<tr>
											<td class="text-center" width=" 27%">911956c594bc</td>
											<td class="text-center" width=" 13%">000</td>
											<td class="text-center" width=" 30%">R$ 00.000,00</td>
											<td class="text-center" width=" 30%">Ativo <span class="span_status"><img src="assets/images/icons/confirmado.svg" width="25px" alt=""></span></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-4 mx-auto text-center pt-2">
									<a href="/acoes-vendidas" class="underline">	
										<img src="assets/images/icons/mais.svg" width="25px" alt=""><br>
										<u>ver tudo</u>
									</a>
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