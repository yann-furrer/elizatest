<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'id_meal',
        'ing1',
        'ing2',
        'ing3',
        'ing4',
        'ing5',
        'ing6',
        'ing7',
        'ing8',
    
    ];
    public $timestamps = false;
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/ingredients/'.$this->getKey());
    }
    public function user()
    {
        return $this->belongsTo('App\Meal');
    }
}
