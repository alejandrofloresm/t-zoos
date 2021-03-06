<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vulgar_name', 'scientific_name', 'family', 'is_on_danger'
    ];

    /**
     * The zoos that are related to the species.
     */
    public function zoos()
    {
        return $this->belongsToMany('App\Zoo');
    }

    public function animals() {
        return $this->hasMany('App\Animal');
    }
}
