@extends('layout')

@section('styles')
	{!! Html::style('assets/css/easy-autocomplete.css')!!}
@endsection

@section('content')
	<h1>Autocomplete demo</h1>
	{!! Form::open(['class'=>'form']) !!}
		{!! Field::text('user',['class'=>'easy-autocomplete']) !!}
	{!! Form::close() !!}
@endsection

@section('script')
{!! Html::script('assets/js/jquery.easy-autocomplete.js')!!}

<script>
	$(document).ready(function() {
		var options = {
		    url: "/resources/people.json",

		    getValue: "name",

		    template: {
		        type: "description",
		        fields: {
		            description: "email"
		        }
		    },

		    list: {
		        match: {
		            enabled: true
		        }
		    },

			theme: "bootstrap",


		};

		$("#user").easyAutocomplete(options);
	});



</script>
@endsection