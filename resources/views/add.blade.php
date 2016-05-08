@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">Crud Laravel 5.2 With Materializecss</div>
</div>

<div class="section">
	{!! Form::open([
		'action' => 'CrudController@store'
	]) !!}
	
	<div class="row">
		<div class="input-field col s12">
			{!! Form::text('judul', null,['class' => 'validate']) !!}
			{!! Form::label('Judul','Judul') !!}
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			{!! Form::textarea('isi', null,['class' => 'materialize-textarea']) !!}
			{!! Form::label('Isi','Isi') !!}
			
		</div>
	</div>
	{!! Form::button('Submit <i class="material-icons right">send</i>', ['class' => 'btn btn-flat pink accent-3 waves-effect waves-light white-text right', 'type' => 'submit']) !!}

	{!! Form::close() !!}
		

</div>

@endsection