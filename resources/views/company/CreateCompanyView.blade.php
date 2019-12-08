@extends('adminlte::page')

@section('title', 'Plano de Contas')

@section('content')
<div class="card card-primary">
    <div class="card-header with-border">
        <h3 class="card-title">Cadastrar Empresa</h3>
	</div>
	
    <div class="card-body">
        <div class="form-group">
            <form class="form-horizontal" action="{{ route('company.store') }}" method="POST">
			@csrf
			
            	<div class="col-sm-4 input">
                	<label>CNPJ</label>
                	<input type="text" class="form-control" name="cnpj" value="{{ isset($data->cp_cnpj) }}" placeholder="CNPJ" onfocus="true">
              	</div>
              
              	<div class="col-sm-4 input">
                  	<label>Nome</label>
                  	<input type="text" class="form-control" name="desc" value="{{ isset($data->cp_desc) }}" placeholder="Nome">
              	</div>

			  	<br><br><br><br><br><br>
			  	<div style="text-align: center;">
					<a href="{{ route('company.index') }}" class="btn btn-danger btn">Cancelar</a>
					<button type="submit" class="btn btn-primary pull-right btn">Salvar</button>
			  	</div>
			</form>
        </div>
	</div> 
</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
	
	<style>
		.input {
			float: left;
		}

		.btn {
			width: 200px;
		}
	</style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop