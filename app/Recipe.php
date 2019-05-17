<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
    public function ingredients()
    	{
    	return $this->hasMany('App\RecipeIngredient', 'recipes_id');
    	}

    public function cooking_steps()
    	{
    	return $this->hasMany('App\RecipeCookingStep', 'recipes_id');
    	}
}
