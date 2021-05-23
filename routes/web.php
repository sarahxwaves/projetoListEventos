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

//HOME
Route::get('/', ['as'=>'site.home', 'uses'=>'site\HomeController@index']);

//LOGIN
Route::get('/login', ['as'=>'site.login', 'uses'=>'site\LoginController@index']);
Route::post('/login/entrar', ['as'=>'site.login.entrar', 'uses'=>'site\LoginController@entrar']);
Route::get('/login/sair', ['as'=>'site.login.sair', 'uses'=>'site\LoginController@sair']);

//USUÁRIO CLIENTE AUTH
Route::get('/user', ['as'=>'user', 'uses'=>'UserController@index']);

//CLIENTE E EVENTO PELO ADMIN
Route::get('/cliente', ['as'=>'cliente', 'uses'=>'ClienteController@index']);
Route::get('/cliente/add', ['as'=>'cliente.add', 'uses'=>'ClienteController@add']);
Route::post('/cliente/salvar', ['as'=>'cliente.salvar', 'uses'=>'ClienteController@salvar']);
Route::get('/cliente/listaclientes', ['as'=>'listaclientes', 'uses'=>'ClienteController@listaclientes']);

Route::get('/cliente/listaevento', ['as'=>'listaevento', 'uses'=>'EventoController@listaevento']);

//EVENTO
Route::get('/evento', ['as'=>'evento', 'uses'=>'EventoController@index']);
Route::get('/evento/add', ['as'=>'evento.add', 'uses'=>'EventoController@add']);
Route::post('/evento/salvar', ['as'=>'evento.salvar', 'uses'=>'EventoController@salvar']);
Route::get('/evento/editar/{id}', ['as'=>'evento.editar', 'uses'=>'EventoController@editar']);
Route::put('/evento/atualizar/{id}', ['as'=>'evento.atualizar', 'uses'=>'EventoController@atualizar']);
Route::get('/evento/deletar/{id}', ['as'=>'evento.deletar', 'uses'=>'EventoController@deletar']);

//PAGINA DO EVENTO
Route::get('/user/paginaevento/{id?}', ['as'=>'user.paginaevento', 'uses'=>'EventoController@indexpagevento']);


//SERVIÇO
Route::get('/fornecedor/servico',['as'=>'fornecedor.servico','uses'=>'ServicoController@servico']);
Route::get('/servico/continuar',['as' =>'servico.continuar','uses'=>'ServicoController@continuar']);
Route:: get('/servico/editar/{id}',['as' =>'servico.editar','uses'=>'ServicoController@editar']);
Route::get('/servico/listaservico', ['as'=>'listaservicos', 'uses'=>'ServicoController@listaservicos']);
Route:: put('/servico/atualizar/{id}',['as' =>'servico.atualizar','uses'=>'ServicoController@atualizar']);
Route:: get('/servico/deletar/{id}',['as' =>'servico.deletar','uses'=>'ServicoController@deletar']);
Route:: post('/servico/salvar',['as' =>'servico.salvar','uses'=>'ServicoController@salvar']);
Route:: get('/servico/adicionar',['as' =>'servico.add','uses'=>'ServicoController@index']);


//FORNECEDOR
Route:: get('/fornecedor/perfil/{id?}',['as'=>'fornecedor.perfil','uses'=>'ServicoController@perfil']);
Route:: get('/fornecedor/adicionar',['as' =>'fornecedor.adicionar','uses'=>'FornecedorController@adicionar']);
Route:: post('/fornecedor/salvar',['as' =>'fornecedor.salvar','uses'=>'FornecedorController@salvar']);
Route:: get('/fornecedor/editar/{id}',['as' =>'fornecedor.editar','uses'=>'FornecedorController@editar']);
Route:: put('/fornecedor/atualizar/{id}',['as' =>'fornecedor.atualizar','uses'=>'FornecedorController@atualizar']);
Route:: get('/fornecedor/deletar/{id}',['as' =>'fornecedor.deletar','uses'=>'FornecedorController@deletar']);
Route::get('/fornecedor/listafornecedor', ['as'=>'listafornecedor', 'uses'=>'FornecedorController@listafornecedor']);
Route:: get('/fornecedor/agenda/',['as' =>'fornecedor.agenda','uses'=>'FornecedorController@agenda']);
Route:: any('fornecedor/pagina/search',['as'=>'servico.search','uses'=>'ServicoController@search']);

Route:: get('/fornecedor/servico',['as'=>'fornecedor.servico','uses'=>'ServicoController@servico']);
Route:: get('/fornecedor/pagina/',['as' =>'fornecedor.pagina','uses'=>'ServicoController@principal']);
Route:: get('/fornecedor/{id?}',['as' =>'fornecedor','uses'=>'FornecedorController@index']);


//CHECKLIST
Route:: get('/checklist',['as'=>'checklist','uses'=>'ChecklistController@index']);
Route::get('/checklist/add', ['as'=>'checklist.add', 'uses'=>'ChecklistController@add']);
Route::post('/checklist/salvar', ['as'=>'checklist.salvar', 'uses'=>'ChecklistController@salvar']);
Route::get('/checklist/editar/{id}', ['as'=>'checklist.editar', 'uses'=>'ChecklistController@editar']);
Route::put('/checklist/atualizar/{id}', ['as'=>'checklist.atualizar', 'uses'=>'ChecklistController@atualizar']);
Route::get('/checklist/deletar/{id}', ['as'=>'checklist.deletar', 'uses'=>'ChecklistController@deletar']);

//CONVIDADOS
Route::get('/evento/convidados', ['as'=>'evento.convidados', 'uses'=>'ConvidadoController@index']);
Route::get('/evento/convidados/add/{id?}', ['as'=>'convidado.add', 'uses'=>'ConvidadoController@add']);
Route::post('/evento/convidados/salvar', ['as'=>'convidado.salvar', 'uses'=>'ConvidadoController@salvar']);
Route::get('/evento/convidados/editar/{id}', ['as'=>'convidado.editar', 'uses'=>'ConvidadoController@editar']);
Route::put('/evento/convidados/atualizar/{id}', ['as'=>'convidado.atualizar', 'uses'=>'ConvidadoController@atualizar']);
Route::get('/evento/convidados/deletar/{id}', ['as'=>'convidado.deletar', 'uses'=>'ConvidadoController@deletar']);

//ADMIN CLIENTE
Route::group(['middleware'=>'auth'], function(){

    Route::get('/cliente/editar/{id}', ['as'=>'cliente.editar', 'uses'=>'ClienteController@editar']);
    Route::put('/cliente/atualizar/{id}', ['as'=>'cliente.atualizar', 'uses'=>'ClienteController@atualizar']);
    Route::get('/cliente/deletar/{id}', ['as'=>'cliente.deletar', 'uses'=>'ClienteController@deletar']);

});
