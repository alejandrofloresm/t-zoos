<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zoo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'city', 'country', 'size', 'annual_budget'
    ];

    /**
     * The species that belong to the zoo.
     */
    public function species()
    {
        return $this->belongsToMany('App\Species');
    }
}
