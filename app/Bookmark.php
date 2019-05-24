<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
  protected $table='bookmark';
  protected $primaryKey='id';
  protected $fillable = ['id','recipe_id','user_id'];
  public $timestamps = false;

  public function recipes(){
    return $this->hasMany('App\Recipe');
  }

  public function users(){
    return $this->hasMany('App\User');
  }
}
