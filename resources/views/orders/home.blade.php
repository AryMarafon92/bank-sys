@extends('dashboard/layouts.default')

@section('title')
@parent
@stop

@section('content')
<div class="dashboard-ecommerce">
	<div class="container-fluid dashboard-content my-orders">

		<!-- pageheader  -->
		<div class="row mb-4">
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 my_orders">
				<div class="row" >
					<div class="col-md-4">
							<p>
								<small>
									<?php
									setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
									date_default_timezone_set('America/Sao_Paulo');
									echo strftime('Hoje, %d %b ', strtotime('today'));
									?>
								</small>
							</p>
					</div>
					<div class="col-md-4">
							<h4 class="color_white">Posição <br>acionária</h4>
					</div>
					<div class="col-md-4">
							<input class="value au-input au-input--full input-auth" type="password" name="password" value="R$0.00" id="value-field" placeholder="" readonly>
							<span toggle="#value-field" class="fa fa-fw fa-eye color_white field-icon toggle-password"></span>
					</div>
				</div>
				
			</div>
		</div>
		<!-- end pageheader  -->

		<div class="dashboard_base">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner">
						<div class="col-card">
							<div class="row hp-60 mt-4">
								<div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
									<h1 class="bold color_nero">Meus <br> pedidos</h1>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-auto ml-auto">
									<div class="tabs d-flex justify-content-between">
										<div class="tab">
											<input type="radio" id="tab-1" name="tab-group-1" checked>
											<label for="tab-1">24 horas</label>
										</div>
										<div class="tab">
											<input type="radio" id="tab-2" name="tab-group-1">
											<label for="tab-2">7 dias</label>
										</div>
										<div class="tab">
											<input type="radio" id="tab-3" name="tab-group-1">
											<label for="tab-3">14 dias</label>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-auto">
									<div class="tabs d-flex justify-content-between">
										<div class="tab">
											<input class="dateinput" type="text" id="datepicker" placeholder="<?php echo date('d M, Y'); ?>">
										</div>
										<div class="tab">
											<input class="dateinput" type="text" id="datepicker1" placeholder="<?php echo date('d M, Y'); ?>">
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-5 mb-3 hp-60 ">
								<div class="col-12">

									<table id="table_myOrders" class="display responsive nowrap " style="width:100%">
										<thead>
											<tr>
												<th></th>
												<th class="text-center">Ação</th>
												<th class="text-center">Valor</th>
												<th class="text-center">Data</th>
												<th class="text-center">Status</th>
											</tr>
										</thead>
										<tbody>
										<tr>
												<td class="text-center">#000</td>
												<td class="text-center">35000</td>
												<td class="text-center">R$ 35.000,00</td>
												<td class="text-center">04/12/2020</td>
												<td class="text-center">Aprovado <span class="span_status"><img src="assets/images/icons/confirmado.svg" width="25px" alt=""></span></td>
											</tr>
											<tr>
												<td class="text-center">#000</td>
												<td class="text-center">35000</td>
												<td class="text-center">R$ 35.000,00</td>
												<td class="text-center">04/12/2020</td>
												<td class="text-center">Pendente <span class="span_status"><img src="assets/images/icons/pendente.svg" width="25px" alt=""></span></td>
											</tr>
											<tr>
												<td class="text-center">#000</td>
												<td class="text-center">35000</td>
												<td class="text-center">R$ 35.000,00</td>
												<td class="text-center">04/12/2020</td>
												<td class="text-center">Cancelado <span class="span_status_cancelled"><img src="assets/images/icons/cancelado.svg" width="25px" alt=""></span></td>
											</tr>
											<tr>
												<td class="text-center">#000</td>
												<td class="text-center">35000</td>
												<td class="text-center">R$ 35.000,00</td>
												<td class="text-center">04/12/2020</td>
												<td class="text-center">Aprovado <span class="span_status"><img src="assets/images/icons/pendente.svg" width="25px" alt=""></span></td>
											</tr>
											<tr>
												<td class="text-center">#000</td>
												<td class="text-center">35000</td>
												<td class="text-center">R$ 35.000,00</td>
												<td class="text-center">04/12/2020</td>
												<td class="text-center">Aprovado <span class="span_status"><img src="assets/images/icons/pendente.svg" width="25px" alt=""></span></td>
											</tr>
										</tbody>
									</table>
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