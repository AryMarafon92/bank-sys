@extends('admin/layouts.default')

@section('title')
@parent
@stop

@section('content')
<div class="dashboard-ecommerce">
	<div class="container-fluid dashboard-content withdrawal">

		<div class="dashboard_base admin investors">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner mnh-700">
						<div class="card-header rounder-top-corner">
                            <div class="row">
                                <div class="col-6">
							        <h1 class="number color_nero">Saques</h1>
                                </div>
                            </div>
						</div>
						<div class="card-body">
                            <div class="row">
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 ml-auto">
                                    <button id="thebutton" type="button" class="show_btn text-center border_none pl-4 p-0 table_content mb-3 float-right">
                                        <span class="span1"><img src="assets/images/icons/mais.svg" width="30px" alt="" class="mr-2"><u>Ver Mais</u></span>
                                        <span class="span2"><img src="assets/images/icons/menos.svg" width="30px" alt="" class="mr-2"><u>Ver Menos</u></span>
                                    </button>
                                </div>
                            </div>
                            <div class="table_wrapper">
                                <table id="table_withdrawal" class="display nowrap " style="width:100%">
									<thead>
										<tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Data</th>
                                            <th class="text-center">Nome</th>
                                            <th class="text-center">CPF/CNPJ</th>
                                            <th class="text-center">Valor</th>
                                            <th>Agencia com digito</th>
                                            <th>Conta</th>
                                            <th>Digito</th>
                                            <th class="show_content">Banco</th>
                                            <th class="show_content">Tipo</th>
                                            <th class="show_content">E-mail</th>
                                            <th></th>
										</tr>
									</thead>
									<tbody>
										<tr>											
                                            <td class="text-center">#000</td>
                                            <td class="text-center">10/09/2020 19:31:14</td>
                                            <td class="text-center">Lorem ipsum dolor sit amet</td>
                                            <td class="text-center">00.000.000/0000-00</td>
                                            <td class="text-center">R$00.000,00</td>
                                            <td class="text-center">0000-0</td>
                                            <td class="text-center">000000</td>
                                            <td id="togBorder" class="text-center radius_border">0</td>
                                            <td class="show_content text-center">bank</td>
                                            <td class="show_content text-center">CC</td>
                                            <td id="radius_border" class="show_content text-center ">contato@bank.com.br</td>
											<td class="">

                                                <button type="button" class="nero_btn text-center"  onclick="window.location.href='/editar-dados'">Comprovante</button>
											</td>
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

@endsection