<?php

namespace App\Http\Controllers;

use App\Http\Requests\VeiculosRequest;
use App\Models\Acessibilidade;
use App\Models\Veiculos;
use Illuminate\Http\Request;

class VeiculosController extends Controller
{
    function index() {
        $veiculos = Veiculos::with('acessibilidade')->orderBy('id', 'ASC')->get();

        return view('veiculos.index', compact('veiculos'));
    }
    function create() {
        $acessibilidades = Acessibilidade::get();

        return view('veiculos.create', compact('acessibilidades'));
    }
    function store(VeiculosRequest $request) {
        try {
            Veiculos::create($request->all());
            return redirect()->route('veiculos.index')->with('sucess', 'Veiculo cadastrado com sucesso!');

        } catch (\Throwable $th) {
            return redirect()->back()->withInput($request->input());
        }
    }
    function edit($id) {
        try {
            $veiculo = Veiculos::find($id);
            $acessibilidades = Acessibilidade::get();
    
            return view('veiculos.edit',compact('veiculo', 'acessibilidades'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Não foi possivel localizar veiculo!');
        }
    }
    function update(Request $request, $id) {
        try {
            $veiculo = Veiculos::find($id);
            $veiculo->update($request->all());
            return redirect()->route('veiculos.index')->with('sucess', 'Veiculo editado com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->route('veiculos.index')->with('error', 'Falha ao editar veiculo!');

        }
    }
    function destroy($id) {
        try {
            $veiculo = Veiculos::find($id);
            $veiculo->delete();
            return response()->json();
        } catch (\Throwable $th) {
            return redirect()->json();
        }


    }
}
