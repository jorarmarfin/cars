@extends('layout')

@section('content')
	<h1>Dynamic DropDown</h1>
	{!!Form::open(['class'=>'form'])!!}
	{!!Field::select('IdRegion',Cars\Models\Region::lists('nombre','id')->toArray())!!}
	{!!Field::select('IdProvincia',Cars\Models\Provincia::lists('nombre','id')->toArray())!!}
	{!!Field::select('IdDistrito',Cars\Models\Distrito::lists('nombre','id')->toArray())!!}
	{!!Form::close()!!}

@endsection