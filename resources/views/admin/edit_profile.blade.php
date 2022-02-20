@extends('admin/layouts.default')

@section('title')
@parent
@stop

@section('content')
<div class="dashboard-ecommerce">
	<div class="container-fluid dashboard-content ">

		<div class="dashboard_base admin edit_profile">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner base_card">
						<div class="row">
							<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="card rounder-corner card_content mnh-580 mb-0">
									<div class="card-header ">
										<h3 class="number">Informações básicas</h3>
									</div>
									<div class="card-body ">
										<form action="" class="mnh-380">
											<div class="form-group">
												<input type="text" value="" placeholder="Usuário">
											</div>

											<div class="form-group">
												<input type="text" value="" placeholder="Nome">
											</div>

											<div class="form-group">
												<input type="email" name="" id="" placeholder="E-mail">
											</div>

											<div class="form-group">
												<input type="text" name="" id="" placeholder="Mínimo deposito">
											</div>
											
											<div class="form-group form_group_btn">
												<input class="submit_btn" data-toggle="modal" data-target="#editModalConfirmation" value="Atualizar">
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="card rounder-corner card_content mnh-580 mb-0">
									<div class="card-header ">
										<h3 class="number">Alterar senha</h3>
									</div>
									<div class="card-body change_password">
										<form action="" class="mnh-380">
											<div class="form-group">
												<input type="text" value="" placeholder="Nova senha">
											</div>

											<div class="form-group">
												<input type="text" value="" placeholder="Confirmar nova senha">
											</div>
											
											<div class="form-group form_group_btn">
												<input class="submit_btn" data-toggle="modal" data-target="#editModalConfirmation" value="Atualizar">
											</div>
										</form>
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