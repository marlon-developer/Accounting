{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Usuários')



@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Empresas</h3>
    </div>

    <!-- Tabela -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>CNPJ</th>
                    <th>Subtipo</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{ $data->cp_cnpj }}</td>
                    <td>{{ $data->cp_desc }}</td>
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