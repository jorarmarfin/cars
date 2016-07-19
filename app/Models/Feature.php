<?php

namespace Cars\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
	public $fillable = ['name'];
	public static function filterNewFeatures($features)
	{
		$features = array_filter($features,function ($value){
    		return !is_numeric($value);
    	});
    	// Esta funcion de php sirve para crear arrays unicos
    	$features = array_unique($features);
    	// Esta funcion de php limpia los espacios en blanco de los campos
    	array_walk($features, 'trim');
    	// Para restringir la catidad de caracteres del tag
    	$features = array_filter($features, function ($value){
    		return strlen($value)>= 2;
    	});

    	$existingFeatures = static::whereIn('name',$features)->lists('name')->toArray();
    	// Esta funcion de php compara dos arrays y me devuelve la diferencia
    	return $newFeatures = array_diff($features, $existingFeatures);
	}

    public static function addNewFeatures($features)
    {
    	$newFeatures = static::filterNewFeatures($features);

    	foreach ($newFeatures as $feature) {
    		static::create(['name' => $feature]);
    	}

    }
}
