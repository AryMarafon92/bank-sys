@extends('dashboard/layouts.default')

@section('title')
@parent
@stop

@section('content')
<div class="dashboard-ecommerce">
	<div class="container-fluid dashboard-content ">

		<div class="dashboard_base admin account investors">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="card rounder-corner bg-transparent shadow-none">
                        <div class="row mnh-700 rounder-corner">
                            <div class="col-12" id="Div1">
                                <div class="row mnh-700">
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-flex align-items-center bg_gray border_left  border_sm_top">   
                                        <a class="w-100" href="/conta">
                                            <div class="col text-center">
                                                <img class="icon_initial" src="assets/images/icons/configuracoes_white.svg" width="80px" alt="">   
                                                <p class="settings_home">conta</p>                  
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-flex align-items-center bg_gray border_right  border_sm_bottom">
                                        <div class="col text-center">  
                                            <input class="btn_border_profile" id="Button1" type="button" value="desativar conta" onclick="switchVisible();"/>
                                            <!-- <a class="btn_border_profile text-center w-100" href="" onclick="onclick="javascript:switchVisible();"">desativar conta</a> -->
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 div-display " id="Div2">
                                <div class="h-100 d-flex align-items-center justify-content-center bg_nero_border ">  
                                    <div class="col text-center">
                                        <img class="icon_initial mb-6" src="assets/images/icons/smile-white.svg" width="80px" alt="">   
                                        <h1 class="mb-6 disable_title color_white">tem certeza que quer <br> desativar a sua conta?</h1>  
                                        <a class="btn_transparent_disable_account text-center mr-3 mt-3" href="/">voltar</a>
                                        <a class="btn_white_disable_account text-center " href="" data-toggle="modal" data-target="#editProfilePassword">desativar</a>     
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

<style>
.div-display{
  display: none!important;
}
</style>
<script>
function switchVisible() {
    if (document.getElementById('Div1')) {

        if (document.getElementById('Div1').style.display == 'none') {
            document.getElementById('Div1').style.display = 'block';
            document.getElementById('Div2').style.display = 'none';
        }
        else {
            document.getElementById('Div1').style.display = 'none';
            document.getElementById('Div2').style.display = 'block';
        }
    var element = document.getElementById("Div2");
    element.classList.remove("div-display");
    }
}
function switchVisibleBack() {
    if (document.getElementById('Div2')) {

        if (document.getElementById('Div2').style.display == 'none') {
            document.getElementById('Div2').style.display = 'block';
            document.getElementById('Div1').style.display = 'none';
        }
        else {
            document.getElementById('Div2').style.display = 'none';
            document.getElementById('Div1').style.display = 'block';
        }
    var element = document.getElementById("Div2");
    element.classList.remove("div-display");
    }
}
</script>
@endsection