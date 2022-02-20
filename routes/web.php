<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('/dashboard/home');
});
Route::get('/acoes', function () {
    return view('/actions/home');
});
Route::get('/ordem-gerada', function () {
    return view('/actions/generated_order');
});
Route::get('/meus-pedidos', function () {
    return view('/orders/home');
});

// ADMIN
Route::get('/admin', function () {
    return view('/admin/home');
});
Route::get('/investidores', function () {
    return view('/admin/investors');
});
Route::get('/editar-dados', function () {
    return view('/admin/edit_profile');
});
Route::get('/pedidos-cancelados', function () {
    return view('/admin/cancelled_orders');
});
Route::get('/pedidos-pagos', function () {
    return view('/admin/paid_orders');
});
Route::get('/pedidos-pendentes', function () {
    return view('/admin/pending_orders');
});
Route::get('/dados-do-contrato', function () {
    return view('/admin/contract_data');
});
Route::get('/acoes-vendidas', function () {
    return view('/admin/actions_sold');
});
Route::get('/rendimentos', function () {
    return view('/admin/income');
});
Route::get('/saques', function () {
    return view('/admin/withdrawal');
});
Route::get('/configuracoes', function () {
    return view('/dashboard/settings');
});
Route::get('/perfil', function () {
    return view('/dashboard/profile');
});
Route::get('/conta', function () {
    return view('/dashboard/account');
});
Route::get('/codigo-desativar-conta', function () {
    return view('/dashboard/disable_code');
});
Route::get('/conta-desativada', function () {
    return view('/dashboard/disabled_success');
});
Route::get('/faq', function () {
    return view('/dashboard/faq');
});
Route::get('/metodo-troca-de-senha', function () {
    return view('/dashboard/change_password_method');
});

// auth
Route::get('/termos', function () {
    return view('/auth/terms');
});
Route::get('/login', function () {
    return view('/auth/login');
});
Route::get('/registro', function () {
    return view('/auth/personal_information');
});
Route::get('/informacoes-complementares', function () {
    return view('/auth/additional_information');
});
Route::get('/endereco', function () {
    return view('/auth/address');
});
Route::get('/email-e-senha', function () {
    return view('/auth/email_password');
});
Route::get('/codigo-de-confirmacao', function () {
    return view('/auth/confirmation_code');
});
Route::get('/inicio-das-distribuicoes', function () {
    return view('/auth/start_distribution');
});
Route::get('/recuperar-senha', function () {
    return view('/auth/recovery_password');
});
Route::get('/metodo-de-confirmacao', function () {
    return view('/auth/confirmation_method');
});
Route::get('/email', function () {
    return view('/auth/email_method');
});
Route::get('/sms', function () {
    return view('/auth/sms_method');
});
Route::get('/mudar-senha', function () {
    return view('/auth/change_password');
});
Route::get('/senha-registrada', function () {
    return view('/auth/password_registered');
});
