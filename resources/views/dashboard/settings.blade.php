@extends('dashboard/layouts.default')

@section('title')
@parent
@stop

@section('content')
<div class="dashboard-ecommerce">
	<div class="container-fluid dashboard-content ">

		<div class="dashboard_base admin investors settings">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner ">
                        <div class="row mnh-700 rounder-corner">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-flex align-items-center bg_black_russian border_left border_sm_top">
                                <a class="w-100" href="/perfil">
                                    <div class="col text-center">
                                        <img class="icon_initial" src="assets/images/icons/perfil_white.svg" width="80px" alt="">   
                                        <p class="settings_home">perfil</p>
                                    </div>                          
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-flex align-items-center bg_gray border_right border_sm_bottom">
                                <a class="w-100" href="/conta">
                                    <div class="col text-center">
                                        <img class="icon_initial" src="assets/images/icons/configuracoes_white.svg" width="80px" alt="">   
                                        <p class="settings_home">conta</p>                  
                                    </div>
                                </a>
                            </div>
                        </div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

@endsection