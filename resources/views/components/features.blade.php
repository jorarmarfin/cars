@extends('layout')

@section('content')
	<h1>Features</h1>
	{!!Form::model($car,['method' => 'POST','class'=>'form'])!!}
		{!!Field::selectMultiple('features[]',$features,null,['label' => 'Features','id' => 'features'])!!}
		<button type="submit" class="btn btn-primary">Enviar</button>
	{!!Form::close()!!}

@endsection
@section('script')
<script>
$(document).ready(function() {
	$('#features').select2({
		tags: true,
		tokenSeparators: [',']

	});
});
</script>
@endsection