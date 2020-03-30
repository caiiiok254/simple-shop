<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredients')
            ->using('App\IngredientRecipe')
            ->withPivot(['quantity']);
    }
}
