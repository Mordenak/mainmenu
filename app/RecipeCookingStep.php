<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeCookingStep extends Model
{
	//
	public function recipe()
		{
		return $this->belongsTo('App\Recipe');
		}
}
