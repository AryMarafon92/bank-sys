@extends('admin/layouts.default')

@section('title')
@parent
@stop

@section('content')
<div class="dashboard-ecommerce">
	<div class="container-fluid dashboard-content ">

		<div class="dashboard_base admin investors">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner mnh-700">
						<div class="card-header rounder-top-corner">
                            <div class="row">
                                <div class="col-6">
							        <h1 class="number color_nero">Investidores</h1>
                                </div>
                            </div>
						</div>
						<div class="card-body">
							<div class="table_wrapper">
								<table id="table_investors" class="display nowrap" style="width:100%">
									<thead>
										<tr>
											<th class="text-center">ID</th>
											<th class="text-center">Nome</th>
											<th class="text-center">Tipo</th>
											<th class="text-center">Documento</th>
											<th class="text-center">E-mail</th>
											<th class="text-center">Criado em</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
											</td>
										</tr>
										<tr>
											<td class="text-center">#000</td>
											<td class="text-center">Nome completo aqui</td>
											<td class="text-center">CPF</td>
											<td class="text-center">000.000.000-00</td>
											<td class="text-center">contato@bank.com.br</td>
											<td class="text-center radius_border">10/09/2020 19:31:14</td>
											<td class="">
												<button type="button" class="unset_btn lavender_blue_btn text-center" data-toggle="modal" data-target="#cofirmationModalAdmin">Acessar</buttom>
												<button type="button" class="unset_btn nero_btn text-center"  onclick="window.location.href='/editar-dados'">Editar</button>
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