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

		<!-- Old content below here: -->
		<a href="/recipes"><< Back</a>
		<div class="flex-center position-ref full-height">
			<div class="content">
				@if ($recipe)
					<h2>{{ $recipe->title }}</h2>

					<hr>

					<p>
						Feeds: {{ $recipe->serving_size }}<br>
						Prep Time: {{ $recipe->prep_time_minutes }}<br>
						Cook Time:
						@if ($recipe->cook_time_minutes > 60)
							{{ $recipe->cook_time_minutes / 60 }} hrs
						@else
							{{ $recipe->cook_time_minutes }}
						@endif
						<br>
					</p>

					<hr>
						<h4>Ingredients</h4>
					<p>
						<div style="display: grid;grid-template-columns: 1fr 1fr;">
						@foreach ($recipe->ingredients as $ingredient)
							<div>
								@if ($ingredient->quantity == 0.5)
									&#189;
								@elseif ($ingredient->quantity == 0.25)
									&#188;
								@else
									{{ $ingredient->quantity }}	
								@endif
								 {{ $ingredient->scale }} {{ $ingredient->name }}
							</div>
						@endforeach
						</div>
					</p>

					<hr>
					<h4>Steps</h4>
					<p>
						<div>
							@foreach ($recipe->cooking_steps as $step)
								<p><b>{{ $step->step_number }}</b> : {{ $step->description }}</p>
							@endforeach
						</div>
					</p>
				@endif
			</div>
		</div>
	</body>
</html>
