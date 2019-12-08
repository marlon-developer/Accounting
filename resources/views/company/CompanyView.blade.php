@extends('adminlte::page')

@section('title', 'Empresas')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Empresas</h3>
        <a href="{{ route('company.create') }}" class="btn btn-primary" style="float: right; width: 200px;">Adicionar</a>
    </div>

    <div class="card-body">
        <table id="tbl-company" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>CNPJ</th>
                    <th>Nome</th>
                    {{-- <th>Ação</th> --}}
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{ $data->cp_cnpj }}</td>
                    <td>{{ $data->cp_desc }}</td>
                    {{-- <td>
                        <a href="" class="btn btn-warning">
                            <i class="fas fa-fw fa-edit"></i>
                        </a>
                        <a href="" class="btn btn-danger">
                            <i class="fas fa-fw fa-trash"></i>
                        </a>
                    </td> --}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop