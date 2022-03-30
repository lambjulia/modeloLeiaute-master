@extends('layouts.master')
@section('title','Prefeitura')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="conteudo">
    <div class="row d-flex justify-content-around">
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/cadastro.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Cadastrar Pessoa</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('cadastro') }}" class="btn btn-primary stretched-link">Link cadastro</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/lupa.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Lista Pessoas</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('tabela') }}" class="btn btn-primary stretched-link">Link lista</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/cadastro.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Cadastrar Protocolo</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('cadastroprotocolo') }}" class="btn btn-primary stretched-link">Link cadastro</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/lupa.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Lista Protocolos</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('tabelaprotocolo') }}" class="btn btn-primary stretched-link">Link lista</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/images.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">PDF Exemplo</h4>
                    <p class="card-text"></p>
                    <a href="{{ url('pdf') }}" class="btn btn-primary stretched-link">Link lista</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection