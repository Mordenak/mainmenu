<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/recipes', function () {
	$recipes = App\Recipe::orderBy('created_at', 'asc')->get();

	return view('recipes', [
		'recipes' => $recipes
	]);
});

Route::get('/recipe/{id}', function ($id) {
	$recipe = App\Recipe::find($id);

	// die(print_r($recipe->ingredients()));

	return view('recipe', ['recipe' => $recipe]);
});

Route::post('/recipe', function (Request $request) {
	$validator = Validator::make($request->all(), [
		'title' => 'required|max:255',
	]);

	if ($validator->fails()) {
		return redirect('/recipes')->withInput()->withErrors($validator);
	}

	$recipe = new App\Recipe;
	$recipe->title = $request->title;
	$recipe->serving_size = $request->serving_size;
	$recipe->prep_time_minutes = $request->prep_time_minutes;
	$recipe->cook_time_minutes = $request->cook_time_minutes;
	$recipe->save();

	$data = $request->all();

	foreach ($data['ingredients'] as $ingredient)
		{
		$Ingredient = new App\RecipeIngredient;
		$Ingredient->name = $ingredient['name'];
		$quantity = $ingredient['quantity'];
		if ($ingredient['quantity'] == '1/4')
			{
			$quantity = 0.25;
			}
		elseif ($ingredient['quantity'] == '1/2')
			{
			$quantity = 0.5;
			}
		$Ingredient->quantity = $quantity;
		$Ingredient->scale = $ingredient['scale'];
		$Ingredient->recipes_id = $recipe->id;
		$Ingredient->save();
		}

	foreach ($data['steps'] as $step)
		{
		$Step = new App\RecipeCookingStep;
		$Step->step_number = $step['number'];
		$Step->description = $step['description'];
		$Step->seq = $step['seq'];
		$Step->recipes_id = $recipe->id;
		$Step->save();
		}

	return redirect('/recipes');
});