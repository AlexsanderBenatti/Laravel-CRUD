<?php

use Illuminate\Support\Facades\Route;
use App\Models\Fornecedores;
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
use App\Models\Produto;
use Illuminate\Http\Request;

Route::get('/fornecedores', function() {
    $fornecedores = Fornecedores::all();
    return view('fornecedores', ["fornecedores" => $fornecedores]);
});

Route::get('/', function() {
    $produtos = Produto::all();
    return view('inicio', ["produtos" => $produtos]);
});

Route::get('/cadastrar', function() {
    return view('cadastrar');
});

Route::post('/cadastrar-produto', function(Request $request) {
    //dd($request->all());

    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
        'fornecedor_id' => $request->fornecedor_id
    ]);

    return redirect('/');
});

Route::get('/listar-produto/{id}', function($id) {
    //dd(Produto::find($id)); //debug and die
    $produto = Produto::find($id);
    return view('listar', ['produto' => $produto]);
});

Route::get('/editar-produto/{id}', function($id) {
    //dd($request->all());
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});

Route::post('/editar-produto/{id}', function (Request $request, $id) {
    //dd($request->all());
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
        'fornecedor_id' => $request->fornecedor_id
    ]);

    return redirect('/');
});

Route::get('/excluir-produto/{id}', function ($id){
    //dd($request->all());
    $produto = Produto::find($id);
    $produto->delete();

    return redirect('/');
});