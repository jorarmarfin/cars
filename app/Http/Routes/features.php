<?php
use Cars\Models\Feature;
use Cars\Models\Car;

Route::get('features',function (){
	$car = Car::first();

	$features = Feature::orderBy('name','ASC')->lists('name','id')->toArray();

	return view('components/features',compact('features','car'));
});

Route::post('features',function (){
	$car = Car::first();

	$features = Request::get('features');

	Feature::addNewFeatures($features);

	$car->saveFeatures($features);

	return redirect()->to('features');
});