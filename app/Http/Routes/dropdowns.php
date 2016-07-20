<?php

use Cars\Models\Provincia;
use Cars\Models\Distrito;
Route::get('dropdowns',function (){
	return view('components/dropdowns');
});

Route::get('provincia/{idregion}',function ($idregion){
	$provincias = Provincia::where('idregion',$idregion)
					->select('id as value','nombre as text')
					->orderBy('nombre','ASC')
					->get()
					->toArray();
	array_unshift($provincias, ['value' => '','text' => 'Seleccionar Provincia']);

	return $provincias;
});

Route::get('distrito/{idprovincia}',function ($idprovincia){
	$distritos = Distrito::where('idprovincia',$idprovincia)
					->select('id as value','nombre as text')
					->orderBy('nombre','ASC')
					->get()
					->toArray();
	array_unshift($distritos, ['value' => '','text' => 'Seleccionar Distrito']);

	return $distritos;
});