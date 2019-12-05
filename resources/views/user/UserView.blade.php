{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabela de Usuários</h3>
    </div>

    {{-- <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <!-- Row -->
            <div class="row">
                <!-- Selecionar Quantida a ser Mostrada por Lista -->
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="example1_length">
                        <label>Show
                            <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                            </select> entries
                        </label>
                    </div>
                </div>
                <!-- End Selecionar Quantida a ser Mostrada por Lista -->
                <!-- Filtro -->
                <div class="col-sm-12 col-md-6">
                    <div id="example1_filter" class="dataTables_filter">
                        <label>Search:
                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                        </label>
                    </div>
                </div>
                <!-- End Filtro -->
            </div>
            <!-- End Row -->
        </div>
    </div> --}}

    <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div>

    <!-- Tabela -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
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