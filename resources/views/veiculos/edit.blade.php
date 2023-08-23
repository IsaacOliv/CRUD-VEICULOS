@extends('layouts.app')

@section('veiculos')
    <div class="container mt-5">
        <form action="{{route('veiculos.update', $veiculo->id)}}" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Modelo:</label>
                    <input type="text" class="form-control" name="modelo" maxlength="100" id="exampleFormControlInput1" required value="{{$veiculo->modelo}}">
                </div>
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Placa:</label>
                    <input type="text" class="form-control" name="placa" id="exampleFormControlInput1" maxlength="15" required value="{{$veiculo->placa}}">
                </div>
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Data de aquisição:</label>
                    <input type="date" class="form-control" name="dataAquisicao"  id="exampleFormControlInput1" required value="{{$veiculo->dataAquisicao->format('Y-m-d')}}">
                </div>
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipo de acessibilidade:</label>
                    <select class="form-select" name="acessibilidade_id" aria-label="Default select example" required>
                        <option value="{{$veiculo->acessibilidade->id}}" selected disabled>{{$veiculo->acessibilidade->categoria}}</option>
                        @foreach ($acessibilidades as $acessibilidade)
                            <option value="{{$acessibilidade->id}}">{{$acessibilidade->categoria}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-end">
                <button class="btn btn-primary" type="submit">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
@endsection