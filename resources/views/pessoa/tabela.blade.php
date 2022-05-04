@extends('layouts.master')
@section('title','Prefeitura')
@section('content')

<form action="{{ url('/search') }}" method="GET">
    <label for="busca">Buscar</label>
    <input type="search" id="search" name="query">
    <button type="submit">OK</button>
  </form>

  @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-danger">
	<strong>{{ $message }}</strong>
</div>
@endif

<div class="container-fluid no-padding table-responsive-sm">
    <table class="table table-striped nowrap" style="width:100%" id="prefeitura">
        <thead style="align: center">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($pessoa as $pessoa)
            <tr>
                <td>{{$pessoa->id}}</td>
                <td>{{$pessoa->nome}}</td>
                <td>{{$pessoa->cpf}}</td>
                
                <td>
                    <a href="{{ route('show', $pessoa->id) }}" class="btn btn-primary" style="float: right">Ver</a>
                </td>
                <td>
                    <a href="{{ route('edit', $pessoa->id) }}" class="btn btn-success" style="float: right">Editar</a>
                </td>
                <td>
                    <form action="/delete/{{ $pessoa->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="btn btn-danger" style="float: right"  onclick="return confirm('Deseja mesmo deletar?');" ><i class='fa fa-trash'></i> Delete</a></button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
    $('#exemplo').DataTable({
        select: false,
        responsive: true,
        "order": [
            [0, "asc"]
        ],
        "info": false,
        "sLengthMenu": false,
        "bLengthChange": false,
        "oLanguage": {

            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de START até END de TOTAL registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de MAX registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "MENU resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });
});
</script>
@endsection