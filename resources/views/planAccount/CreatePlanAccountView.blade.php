@extends('adminlte::page')

@section('title', 'Plano de Contas')

@section('content')
<div class="card card-primary">
    <div class="card-header with-border">
        <h3 class="card-title">Cadastrar Plano de Contas</h3>
	</div>
	
    <div class="card-body">
        <div class="form-group">
			<form class="form-horizontal" action="{{ route('plan-accounts.store') }}" method="POST">
			@csrf
			
            	<div class="col-sm-4 input">
                	<label for="">Tipo</label>
                	<input type="text" class="form-control" name="type" value="{{ isset($data->pa_type) }}" placeholder="Tipo" onfocus="true">
              	</div>
              
              	<div class="col-sm-4 input">
                  	<label for="">Subtipo</label>
                  	<input type="text" class="form-control" name="subtype" value="{{ isset($data->pa_subtype) }}" placeholder="Subtipo">
              	</div>

              	<div class="col-sm-4 input">
                  	<label for="">Descrição</label>
                  	<input type="text" class="form-control" name="desc" value="{{ isset($data->pa_desc) }}" placeholder="Descrição">
              	</div>

			  	<br><br><br><br><br><br>
			  	<div style="text-align: center;">
					<a href="{{ route('plan-accounts.index') }}" class="btn btn-danger btn">Cancelar</a>
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