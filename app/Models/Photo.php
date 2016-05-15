<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  /**
    * The database table used yhe model.
    *
    * @var string
    */
  protected $table = 'photo';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id','nombre', 'descripcion', 'ruta','album_id'
  ];

  public function album(){
    return $this->belongsTo('App\Models\Album');
  }
}
