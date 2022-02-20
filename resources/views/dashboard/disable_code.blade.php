@extends('dashboard/layouts.default')

@section('title')
@parent
@stop

@section('content')
<div class="dashboard-ecommerce">
	<div class="container-fluid dashboard-content ">
		<div class="dashboard_base ">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner bg-transparent shadow-none">
                        <div class="row mnh-700 rounder-corner">
                            <div class="col-12 ">
                                <div class="h-100 d-flex align-items-center justify-content-center bg_nero_border ">  
                                    <div class="col text-center">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mx-auto">
                                            <p class="disabled_description mb-6">digite o código <br> que enviamos <br> ao seu e-mail <br> e sua senha</p>
                                            <div class="auth-form">
                                                <!-- <form action="" method=""> -->
                                                    <div class="form-group pb-4">
                                                        <input class="au-input au-input--full  input-auth text-center" type="" name="" id="" placeholder="código">
                                                        <center>
                                                            <a class="btn-resend m-auto color_white" href="" data-toggle="modal" data-target="#modalResend"><small>reenviar código</small></a>
                                                        </center>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="au-btn au-btn--block btn-white m-b-20 " href="/conta-desativada" >confirmar</button>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="au-btn au-btn--block btn-transparent m-b-20 " type="submit">voltar</button>
                                                    </div>
                                                <!-- </form> -->
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
	</div>
</div>

@endsection