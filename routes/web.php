<?php

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




  
 
Route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
Route::get('admin/atividades/adicionar', ['as' => 'admin.atividades.adicionar', 'uses' => 'AtividadeController@adicionar']);
Route::post('admin/atividades/salvar', ['as' => 'admin.atividades.salvar', 'uses' => 'AtividadeController@salvar']);
Route::get('admin/atividades/lista_atividades', ['as' => 'admin.atividades.lista_atividades', 'uses' => 'AtividadeController@listar']);
Route::get('admin/atividades/excluir/{id}', ['as' => 'admin.atividades.excluir', 'uses' => 'AtividadeController@excluir']);
Route::get('admin/atividades/editar/{id}', ['as' => 'admin.atividades.editar', 'uses' => 'AtividadeController@editar']);
Route::put('admin/atividades/atualizar/{id}', ['as' => 'admin.atividades.atualizar', 'uses' => 'AtividadeController@atualizar']);
Route::get('admin/atividades/relatorio',['as'=>'admin.atividades.relatorio','uses'=>'AtividadeController@relatorio']); 




   