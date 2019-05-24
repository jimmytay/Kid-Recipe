<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Recipe extends Model
{
    //
    protected $fillable = ['recipeTitle','recipeCategory','description','author','ingredient','steps','timeEstimate','nutritionFact','imageUpload'];
    public $timestamps = false;

    public function bookmark(){
      return $this->belongsTo('App\Bookmark');
    }




}
