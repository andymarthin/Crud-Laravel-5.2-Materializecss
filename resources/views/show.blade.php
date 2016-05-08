@extends('layouts.index')
@section('content')

<div class="section">

	<div class="card-panel purple darken-3 white-text">Crud Laravel 5.2 With Materializecss</div>
</div>

<div class="section">
	@foreach($datas as $data)

	
	<div class="row">
		<div class="col s12">
			<h5>{{ $data->judul }}</h5>

			<div class="divider"></div>

			<p>{!!substr($data->isi,0,200)!!}...</p>

			<a href="{{ url('home',$data->id) }}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Readmore<i class="material-icons">send</i></a>
			<a href="{{ url('home',$data->id) }}/edit" class="btn btn-flat purple darken-4 waves-effect waves-light white-text">Edit<i class="material-icons">mode_edit</i></a>
            {!! Form::model($data, ['route' => ['home.destroy', $data->id], 'method' => 'delete']) !!}
              {!! Form::submit('delete', ['class'=>'btn btn-flat red darken-4-3 waves-effect waves-light white-text']) !!}
             {!! Form::close()!!}
			<!-- <button class="btn btn-flat red darken-4-3 waves-effect waves-light white-text">Delete<i class="material-icons">delete</i></button> -->
		</div>
	</div>
	@endforeach
<div class="row">
	{!! (new App\Pagination($datas))->render() !!}
</div>
</div>

<div class="fixed-action-btn horizontal" style="botom:45px; right: 24px;">
	<a href="{{ url(action('CrudController@create')) }}" class="btn-floating btn-large red"><i class="large material-icons">add</i></a>
</div>

@endsection