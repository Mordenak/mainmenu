<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

		<!-- Styles -->
		<style>
			html, body {
				background-color: #fff;
				color: #636b6f;
				font-family: 'Nunito', sans-serif;
				font-weight: 200;
				height: 100vh;
				margin: 0;
			}

			.full-height {
				height: 100vh;
			}

			.flex-center {
				align-items: center;
				display: flex;
				justify-content: center;
			}

			.position-ref {
				position: relative;
			}

			.top-right {
				position: absolute;
				right: 10px;
				top: 18px;
			}

			.content {
				text-align: center;
			}

			.title {
				font-size: 84px;
			}

			.links > a {
				color: #636b6f;
				padding: 0 25px;
				font-size: 13px;
				font-weight: 600;
				letter-spacing: .1rem;
				text-decoration: none;
				text-transform: uppercase;
			}

			.m-b-md {
				margin-bottom: 30px;
			}
		</style>
	</head>
	<body>

		<div class="flex-center positoin-ref">
			<h2>Recipes</h2>
		</div>

		@foreach ($errors->all() as $error)
			{{ $error }}
		@endforeach

		<a onclick="$('#add-recipe').toggle();">Add Recipe</a>
		<div id="add-recipe" style="display:none;">
			<form action="/recipe" method="POST" class="form-horizontal">
				{{ csrf_field() }}
				<label for="name">Recipe Name</label>
				<input type="text" id="name" name="title">
				<br>
				<label for="serving_size">Serving Size</label>
				<input type="text" id="serving_size" name="serving_size" size="2">
				<br>
				<label for="prep_time_minutes">Prep Time:</label>
				<input type="text" id="prep_time_minutes" name="prep_time_minutes">
				<label for="cook_time_minutes">Cook Time:</label>
				<input type="text" id="cook_time_minutes" name="cook_time_minutes">
				<br>
				<div style="border: 1px solid black;padding:10px;">
					<h4>
						Ingredients
					</h4>
					<div id="recipe-ingredients" class="ingredients-set" data-index="0">
						<label for="quantity_0">Quantity</label>
						<input type="text" size="3" id="quantity_0" name="ingredients[0][quantity]" class="ig-quantity">
						<label for="scale_0">Measurement</label>
						<input type="text" size="3" id="scale_0" name="ingredients[0][scale]" class="ig-scale">
						<label for="ingredient_0">Ingredient</label>
						<input type="text" id="ingredient_0" name="ingredients[0][name]" class="ig-name">
					</div>
					<br><a onclick="addIngredient();">Add Ingredient</a>
				</div>
				
				<div style="border: 1px solid black;padding:10px;">
					<h4>
						Cooking Steps
					</h4>
					<div id="recipe-steps" class="steps-set" data-index="0">
						<label for="number_0">Step</label>
						<input type="text" id="number_0" name="steps[0][number]" size="3" class="step-number">
						<label for="desc_0">Description</label>
						<textarea id="desc_0" name="steps[0][description]" cols="80" rows="4" class="step-description"></textarea>
						<input type="hidden" name="steps[0][seq]" value="0" class="step-seq">
					</div>
					<br><a onclick="addStep();">Add Step</a>
				</div>
				
				<br>
				<br>
				<input type="submit" value="Create Recipe">
			</form>
		</div>


		<!-- Old content below here: -->

		<div class="flex-center position-ref full-height">
			<div class="content">
				@if (count($recipes) > 0)
					<div>
						@foreach ($recipes as $recipe)

						<span style="color:red;font-weight:bold;">
							<a href="/recipe/{{ $recipe->id }}">{{ $recipe->title }}</a>
						</span>
						<br>
						@endforeach
					</div>
				@endif
			</div>
		</div>

<!-- Get this JS somewhere else -->
<script>
function addIngredient()
	{
	var $new_set = $('.ingredients-set').last().clone();
	$new_set.attr('id', '');
	// Update names...
	// Use different select, but class is fast...
	var index = $new_set.data('index') + 1;
	$new_set.attr('data-index', index);
	$new_set.find('input.ig-name').attr('name', 'ingredients['+index+'][name]');
	$new_set.find('input.ig-quantity').attr('name', 'ingredients['+index+'][quantity]');
	$new_set.find('input.ig-scale').attr('name', 'ingredients['+index+'][scale]');
	$('#recipe-ingredients').append($new_set);
	return true;
	}

function addStep()
	{
	var $new_set = $('.steps-set').last().clone();
	$new_set.attr('id', '');
	// Update names...
	// Use different select, but class is fast...
	var index = $new_set.data('index') + 1;
	$new_set.attr('data-index', index);
	$new_set.find('input.step-number').attr('name', 'steps['+index+'][number]');
	$new_set.find('textarea.step-description').attr('name', 'steps['+index+'][description]');
	$new_set.find('input.step-seq').attr('name', 'steps['+index+'][seq]');
	$new_set.find('input.step-seq').attr('value', index);
	$('#recipe-steps').append($new_set);
	return true;
	}

</script>



	</body>
</html>
