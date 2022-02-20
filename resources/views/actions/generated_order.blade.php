@extends('dashboard/layouts.default')

@section('title')
@parent
@stop

@section('content')
<div class="dashboard-ecommerce">
	<div class="container-fluid dashboard-content ">

		<div class="dashboard_base">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner mnh-700">
						<div class="row plr-15">
							<div class="col-3  generate_order" ></div>
							<div class="col-9 right_transfer">
								<div class="row hp-60">
									<div class="col-6">
										<h1 class="bold">Pedido gerado <br> com sucesso!</h1>
										<p class="subtitle"> Parafinalizar, realize o pagamento.</p>
									</div>
									<div class="col-6">
										<a href="">
											<img class="float-right" src="assets/images/icons/imprimir.svg" width="40px" alt="">
										</a>
									</div>
								</div>
								<div class="row mt-5 mb-5 hp-60">
									<div class="col-6">
										<p><b>Nome do usuário</b></p>
										<p>Endereço do user</p>
										<p>E-mail do user</p>
									</div>
									<div class="col-6 text-right">
										<p><b>Número de fatura: #000</b></p>
										<p>Gerado em: 08/09/2020</p>
										<p><img class="mr-2" src="assets/images/icons/pendente.svg" width="25px" alt="">Status: Pendete</p>
										<!-- <p><img class="mr-2" src="assets/images/icons/confirmado.svg" width="25px" alt="">Status: Confirmado</p> -->
										<!-- <p><img class="mr-2" src="assets/images/icons/cancelado.svg" width="25px" alt="">Status: Cancelado</p> -->
									</div>
								</div>
								<hr>
								<div class="row mt-4 mb-3 hp-60">
									<div class="col-12">
										<table>
											<thead>
												<tr>
													<th>Nome</th>
													<th class="text-center">Ações</th>
													<th class="text-center">Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Compra de Ações (50.000) da bank</td>
													<td class="w-25 text-center">50.000</td>
													<td class="w-30 text-center">R$ 50.000,00</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<hr>
								<div class="row hp-60">
									
									<!-- STATUS APROVADO -->
									<!-- <div class="col-5 pt-5 pb-5 br_gray">
										<p><b>Forma de pagamento realizado</b></p>
										<p class="pb-2">Transferência bancária</p>
										<p class="pb-2">Pago em: 10/09/2020</p>
									</div>


									<div class="col-7 text-center pb-5 mt-5 print_receipt">
										<form action="">
											<div class="card_empty mx-auto">
												<div class="row ">
													<div class="col-12 pb-4">
														<center>
															<img src="assets/images/icons/arquivos.svg" width="50px" alt=""><br>
														</center>
													</div>
												</div>
											</div>
										<a class="btn_black" href="">Imprimir comprovante de pagamento</a>
										</form>
									</div> -->
									<!-- STATUS APROVADO -->

									<!-- STATUS PENDENTE BOLETO -->
									<!-- <div class="col-5 pt-5 pb-5 mb-2 br_gray">
										<p class="pb-2"><b>Forma de pagamento:</b></p>
										<form action="">
											<div class="radio-button pb-2">
												<label class="radio-button__label-wrapper" for="sharing_preference_standard">
												Transferência bancária
												<input type="radio" name="sharing_preference" id="sharing_preference_standard" value="standard" class="radio-button__input" checked="checked">
												<div class="radio-button__custom-indicator"></div>  </label>
											</div>

											<div class="radio-button ">
												<label class="radio-button__label-wrapper" for="sharing_preference_public">
												Boleto
												<input type="radio" name="sharing_preference" id="sharing_preference_public" value="public" class="radio-button__input">
												<div class="radio-button__custom-indicator"></div>    </label>
											</div>
											<a class="btn_black text-center mt-5" href="">Gerar fatura e pagar</a>
										</form>
									</div>
									<div class="col-7 text-center pb-5 mt-5">
										<form action="">
										<p><b>Insira o comprovante de pagamento(JPEG, JPG, PNG ou PDF)</b></p>
										<label class="label mb-4">
											<i class="material-icons"><img src="assets/images/icons/arquivos.svg" width="30px" alt=""></i>
											<span class="title"><p class="pt-1"> Arraste e jogue o arquivo aqui ou clique</p></span>
											<input type="file" />
										</label>
										<a class="btn_black" href="">Enviar comprovante</a>
										</form>
									</div> -->
									<!-- STATUS PENDENTE BOLETO -->

									<!-- BOLETO BANCARIO -->
									<!-- <div class="col-5 pt-5 pb-5 br_gray">
										<p><b>Informação de pagamento</b></p>
										<p>8360000000 7 8817111000 2 00101020209 9 46460563818 6</p>
										<div style='text-align: center;'>
											<img class="float-left pb-5" width="95%" alt='Barcode Generator TEC-IT'
												src='https://barcode.tec-it.com/barcode.ashx?data=8360000000+7+8817111000+2+00101020209+9+46460563818+6&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=0&eclevel=M'/>
										</div>
										
										<button class="btn_unset">
											<img src="assets/images/icons/copy.svg" width="25px" alt="">
										</button>
										<button class="btn_unset">
											<img src="assets/images/icons/share.svg" width="25px" alt="">
										</button>
									</div>
									<div class="col-7 text-center pb-5 mt-5">
										<form action="">
										<p><b>Insira o comprovante de pagamento(JPEG, JPG, PNG ou PDF)</b></p>
										<label class="label mb-4">
											<i class="material-icons"><img src="assets/images/icons/arquivos.svg" width="30px" alt=""></i>
											<span class="title"><p class="pt-1"> Arraste e jogue o arquivo aqui ou clique</p></span>
											<input type="file" />
										</label>
										<a class="btn_black" href="">Enviar comprovante</a>
										</form>
									</div> -->
									<!-- BOLETO BANCARIO -->

									<!-- TRANSFERENCIA BANCARIA -->
									<div class="col-5 pt-5 pb-5 br_gray">
										<p><b>Informação de pagamento</b></p>
										<p>Favorecido: bank soluções em pagamento</p>
										<p>CNPJ: 00.000.000/0000-00</p>
										<p>Banco: Bradesco</p>
										<p>Agência: 3131 Conta Corrente:t20118-9</p>
										<button class="btn_unset">
											<img src="assets/images/icons/copy.svg" width="25px" alt="">
										</button>
										<button class="btn_unset">
											<img src="assets/images/icons/share.svg" width="25px" alt="">
										</button>
									</div>
									<div class="col-7 text-center pb-5 mt-5 print_receipt">
										<form action="">
										<p><b>Insira o comprovante de pagamento(JPEG, JPG, PNG ou PDF)</b></p>
										<label class="label mb-4">
											<i class="material-icons"><img src="assets/images/icons/arquivos.svg" width="30px" alt=""></i>
											<span class="title"><p class="pt-1"> Arraste e jogue o arquivo aqui ou clique</p></span>
										</label>
											<!-- SE COMPROVANTE ENVIADO -->
											<!-- <div class="card_empty mx-auto">
												<div class="row ">
													<div class="col-12 pb-4">
														<center>
															<img src="assets/images/icons/confirmado.svg" width="35px" alt=""><br>
															<p class="pt-1"> Comprovante enviado. <br>Aguardando Aprovação</p>
														</center>
													</div>
												</div>
											</div> -->
										
										<a class="btn_black" href="">Enviar comprovante</a>
										</form>
									</div>
									<!-- TRANSFERENCIA BANCARIA -->
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