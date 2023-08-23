@extends('layouts.app')

@section('veiculos')
    <div class="container mt-5">
        @if ($errors->any())
            <div class="container text-danger alert  alert-danger">
                <ul class="errors">
                    @foreach ($errors->all() as $error)
                        <li class="alert">{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('veiculos.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Modelo:</label>
                    <input type="text" class="form-control" name="modelo" maxlength="100" id="exampleFormControlInput1" required >
                </div>
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Placa:</label>
                    <input type="text" class="form-control" name="placa" maxlength="15" id="exampleFormControlInput1" required>
                </div>
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Data de aquisição:</label>
                    <input type="date" class="form-control" name="dataAquisicao" id="exampleFormControlInput1" required>
                </div>
                <div class="col-6 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tipo de acessibilidade:</label>
                    <select class="form-select" name="acessibilidade_id" aria-label="Default select example" required>
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