@extends('adminlte::page')

@section('title', 'Plano de Contas')

@section('content')
<div class="card card-default">
    <div class="card-header with-border">
        <h3 class="card-title">Balanço Patrimonial</h3>

        <div style="float: right;">
            <button type="submit" class="btn btn-primary pull-right btn">Add Item</button>
        </div>
	</div>
	
    <div class="card-body">
        <div class="form-group">
            <form class="form-horizontal" action="{{ route('balance-sheet.store') }}" method="POST">
			@csrf
			
              	<div class="col-sm-12 input">
                    <label>Empresa</label>
                    <select name="company" class="form-control">
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->cp_desc }}</option>
                        @endforeach
                    </select>
                </div>
                  
                <div class="col-sm-4 input">
                    <br>
                    <label>Tipo</label>
                    <select name="type[]" class="form-control">
                        <option value="Ativo Circulante">Ativo Circulante</option>
                        <option value="Ativo Não Circulante">Ativo Não Circulante</option>
                        <option value="Passivo Circulante">Passivo Circulante</option>
                        <option value="Passivo Não Circulante">Passivo Não Circulante</option>
                        <option value="Patrimônio Líquido">Patrimônio Líquido</option>
                    </select>
                </div>

                <div class="col-sm-4 input">
                    <br>
                    <label>Sutipo</label>
                    <select name="subtype[]" class="form-control">
                        @foreach ($plan_accounts as $pa)
                            <option value="{{ $pa->type_id }}">{{ $pa->pa_desc }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-sm-4 input">
                    <br>
                    <label>Valor do Item</label>
                    <input type="number" class="form-control" name="value[]" value="" placeholder="Valor" onfocus="true">
                </div>

                <div class="col-sm-2 input">
                    <br>
                    <div class="form-check">
                        <input name="discount[]" class="form-check-input" type="checkbox">
                        <label class="form-check-label" value="1">Descontar</label>
                    </div>                
                </div>

			  	<br><br><br><br><br><br><br><br><br><br><br><br><br>
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