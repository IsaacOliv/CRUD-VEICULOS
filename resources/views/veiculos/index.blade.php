@extends('layouts.app')

@section('veiculos')
    <div class="container mt-5">
        <table class="table">
            <thead>
              <tr>
                <th class="text-center" scope="col">Modelo</th>
                <th class="text-center" scope="col">Data de aquisição</th>
                <th class="text-center" scope="col">Placa</th>
                <th class="text-center" scope="col">Acessibilidade</th>
                <th class="text-center" scope="col">ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($veiculos as $veiculo)
                <tr id="tr-{{$veiculo->id}}">
                    <th class="text-center">{{$veiculo->modelo}}</th>
                    <th class="text-center">{{$veiculo->dataAquisicao->format('d/m/Y')}}</th>
                    <th class="text-center">{{$veiculo->placa}}</th>
                    <th class="text-center">{{$veiculo->acessibilidade->categoria}}</th>
                    <th class="text-center">
                        <a class="btn btn-primary" href="{{route('veiculos.edit', $veiculo->id)}}">Editar</a>
                        <button class="btn btn-danger" type="button" onclick="deleteVeiculo({{$veiculo->id}})">Deletar</button>
                    </th>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>

    <script src="{{asset('veiculos/delete.js')}}"></script>
@endsection