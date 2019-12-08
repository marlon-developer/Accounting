@extends('adminlte::page')

@section('title', 'Plano de Contas')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Plano de Contas</h3>
        <a href="{{ route('plan-accounts.create') }}" class="btn btn-primary" style="float: right; width: 200px;">Adicionar</a>
    </div>

    <!-- Tabela -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Subtipo</th>
                    <th>Item</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{ $data->pa_type }}</td>
                    <td>{{ $data->pa_subtype }}</td>
                    <td>{{ $data->pa_desc }}</td>
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