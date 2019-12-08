{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Usuários')



@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Plano de Contas</h3>
    </div>

    <!-- Tabela -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Tipo</th>
                    <th>Subtipo</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{ $data->pa_desc }}</td>
                    <td></td>
                    <td></td>
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