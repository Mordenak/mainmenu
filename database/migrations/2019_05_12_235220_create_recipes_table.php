<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title');
			$table->integer('serving_size');
			$table->integer('prep_time_minutes');
			$table->integer('cook_time_minutes');
			$table->timestamps();
		});

		Schema::create('recipe_ingredients', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->float('quantity');
			$table->string('scale');
			$table->integer('recipes_id');
			$table->foreign('recipes_id')->references('id')->on('recipes');
			$table->timestamps();
		});

		Schema::create('recipe_cooking_steps', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('step_number');
			$table->text('description');
			$table->integer('seq');
			$table->integer('recipes_id');
			$table->foreign('recipes_id')->references('id')->on('recipes');
			$table->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('recipe_cooking_steps');
		Schema::dropIfExists('recipe_ingredients');	
		Schema::dropIfExists('recipes');
	}
}
