<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Cars\Models\Provincia;
use Cars\Models\Distrito;
use Cars\Models\Feature;
use Cars\Models\Car;

Route::get('/', function () {
    return view('welcome');
});

Route::get('bootstrap',function (){
	return view('bootstrap');
});

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

Route::get('features',function (){
	$car = Car::first();

	$features = Feature::orderBy('name','ASC')->lists('name','id')->toArray();

	return view('components/features',compact('features','car'));
});

Route::post('features',function (){
	$car = Car::first();
	$car->features()->sync(Request::get('features'));
	// sync va a grabar los features en la tabla features

	return redirect()->to('features');
});