<?php
use Cars\Models\User;

Route::get('autocomplete/demo',function (){

	return view('components/autocomplete_demo');
	// dd(Request::all());
});

Route::post('autocomplete/demo',function (){

	dd(Request::all());
});

Route::get('autocomplete/users',function (){

	$term = Request::get('term');
	return User::findByNameOrEmail($term);

});

Route::get('users/{id}',function ($id){
	return User::findOrFail($id);
});