<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    
    protected $fillable = [
        'meal_name',
        'vegan',
        'time',
        'url',
        'img',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/meals/'.$this->getKey());
    }
    public function ingredient()
    {
        return $this->hasOne('App\Ingredients');
    }

}
