@extends('layout')

@section('content')
	<h1>Features</h1>
	{!!Form::open(['method' => 'POST','class'=>'form'])!!}
		{!!Field::selectMultiple('features[]',$features,$currentFeatures,['label' => 'Features'])!!}
		<button type="submit" class="btn btn-primary">Enviar</button>
	{!!Form::close()!!}

@endsection
