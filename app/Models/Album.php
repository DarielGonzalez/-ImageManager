<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /**
      * The database table used yhe model.
      *
      * @var string
      */
    protected $table = 'albums';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nombre', 'descripcion', 'usuario_id'
    ];

    public function photos(){
          return $this->hasMany('App\Models\Photo');
    }

    public function owner(){
          return $this->belongsTo('App\Models\User');
    }
}
