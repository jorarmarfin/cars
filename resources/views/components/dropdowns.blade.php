@extends('layout')

@section('content')
	<h1>Dynamic DropDown</h1>
	{!!Form::model($ubigeoForm,['method' => 'GET','class'=>'form','id' => 'search'])!!}
	{!!Field::select('idregion',$region)!!}
	{!!Field::select('idprovincia',$provincia)!!}
	{!!Field::select('iddistrito',$distrito)!!}
	{!!Form::close()!!}

@endsection
