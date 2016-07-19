<?php

namespace Cars\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function features()
    {
    	return $this->belongsToMany(Feature::class,'car_feature');
    }
    public function getFeatureIdsAttribute()
    {
    	return $this->features()->lists('feature_id')->toArray();
    }

}
