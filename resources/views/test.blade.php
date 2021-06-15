<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>BB Test</title>

		<!-- Styles -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	</head>
	<body>

		<div class="flex-center position-ref">
			<h2>BB Test</h2>
		</div>

		@foreach ($errors->all() as $error)
			{{ $error }}
		@endforeach

		<div class="backgrounds">
			<div>
				<h4>Stat Rolls</h4>
				<span>HP</span> - (2,3,4)<br>
				<span>Fat</span> - (2,3,4)<br>
				<span>Res</span> - (2,3,4)<br>
				<span>Init</span> - (3,4,5)<br>
				<span>MAtk</span> - (1,2,3)<br>
				<span>RAtk</span> - (2,3,4)<br>
				<span>MDef</span> - (1,2,3)<br>
				<span>RDef</span> - (2,3,4)<br>
			</div>
			<div class="tier1">
				<h4>Top Tier Backgrounds:</h4>
				<span>Hedge Knight</span> - Melee Fighter<br>
				<span>Assassin</span> - Initiative Fighter<br>
				<span>Hunter</span> - Archer<br>
				<span>Adventurous Noble</span> - Sergeant<br>
			</div>
			<div class="tier2">
				<h4>Useful Backgrounds:</h4>
				<span>Butcher</span> - Melee Fighter<br>
				<span>Bowyer</span> - Archer<br>
				<span>Bastard</span> - For Assassin<br>
				<span>Brawler</span> - Melee Fighter<br>
				<span>Caravan Hand</span> - Melee Fighter<br>
				<span>Crusader</span> - Melee Fighter/Sergeant<br>
				<span>Daytaler</span> - Melee Fighter<br>
				<span>Farmhand</span> - Melee Fighter<br>
				<span>Houndmaster</span> - Melee Fighter<br>
				<span>King's Guard</span> - Melee Fighter<br>
				<span>Lumberjack</span> - Melee Fighter<br>
				<span>Messenger</span> - Melee Fighter<br>
				<span>Militia</span> - Melee Fighter<br>
				<span>Monk</span> - Sergeant<br>
				<span>Orc Slayer</span> - Melee Fighter<br>
				<span>Wildman</span> - Melee Fighter/Sergeant<br>
				<span>Poacher</span> - Archer<br>
				<span>Sellsword</span> - Melee Fighter<br>
				<span>Swordmaster</span> - Melee Fighter<br>
				<span>Squire</span> - Melee Fighter/Sergeant<br>
				<span>Raider</span> - Melee Fighter<br>
				<span>Retired Soldier</span> - Melee Fighter<br>
				<span>Thief</span> - Melee Fighter<br>
				<span>Vagabond</span> - Melee Fighter<br>
				<span>Rat Catcher</span> - Initiative Fighter<br>
			</div>
		</div>

		<form>
			<div style="display:grid;grid-template-columns: 1fr 1fr;">

				<div style="display:grid;">
					<div>
						<table style="float:right;">
							<tr>
								<td>
									<label for="stat_hp">HP:</label>
								</td>
								<td>
									<input id="stat_hp" data-target="stat_hp" type="text" size="3">
								</td>
								<td>
									<select id="stat_hp_stars" data-target="stat_hp">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label for="stat_fat">Fat:</label>
								</td>
								<td>
									<input id="stat_fat" data-target="stat_fat" type="text" size="3">
								</td>
								<td>
									<select id="stat_fat_stars" data-target="stat_fat">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label for="stat_res">Res:</label>
								</td>
								<td>
									<input id="stat_res" data-target="stat_res" type="text" size="3">
								</td>
								<td>
									<select id="stat_res_stars" data-target="stat_res">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label for="stat_init">Init:</label>
								</td>
								<td>
									<input id="stat_init" data-target="stat_init" type="text" size="3">
								</td>
								<td>
									<select id="stat_init_stars" data-target="stat_init">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div style="display:grid;">

					<div>
						<table>
							<tr>
								<td>
									<label for="stat_matk">MAtk:</label>
								</td>
								<td>
									<input id="stat_matk" data-target="stat_matk" type="text" size="3">
								</td>
								<td>
									<select id="stat_matk_stars" data-target="stat_matk">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label for="stat_ratk">RAtk:</label>
								</td>
								<td>
									<input id="stat_ratk" data-target="stat_ratk" type="text" size="3">
								</td>
								<td>
									<select id="stat_ratk_stars" data-target="stat_ratk">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label for="stat_mdef">MDef:</label>
								</td>
								<td>
									<input id="stat_mdef" data-target="stat_mdef" type="text" size="3">
								</td>
								<td>
									<select id="stat_mdef_stars" data-target="stat_mdef">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label for="stat_rdef">RDef:</label>
								</td>
								<td>
									<input id="stat_rdef" data-target="stat_rdef" type="text" size="3">
								</td>
								<td>
									<select id="stat_rdef_stars" data-target="stat_rdef">
										<option>0</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</td>
							</tr>
						</table>
					</div>

				</div>
			</div>

			<div style="text-align:center;">

				Perk(s):
				<select>
				</select>

				<br><br>

				Highlight Profile:
				<select id="highlighter">
					<option value="none">-- None --</option>
					<option value="2h_fighter" selected>2H Fighter</option>
					<option value="tank">Tank</option>
					<option value="archer">Archer</option>
					<option value="sergeant">Sergeant</option>
					<option value="init_fighter">Init Fighter</option>
				</select>
				<br>
				<div class="distribution">
					Stats to Level:
					<label for="ch_stat_hp">HP: </label><input type="text" id="ch_stat_hp" data-target="stat_hp" maxlength="2" style="width:14px">
					<label for="ch_stat_fat">Fat: </label><input type="text" id="ch_stat_fat" data-target="stat_fat" maxlength="2" style="width:14px" value="10">
					<label for="ch_stat_res">Res: </label><input type="text" id="ch_stat_res" data-target="stat_res" maxlength="2" style="width:14px">
					<label for="ch_stat_init">Init: </label><input type="text" id="ch_stat_init" data-target="stat_init" maxlength="2" style="width:14px">
					<label for="ch_stat_matk">MAtk: </label><input type="text" id="ch_stat_matk" data-target="stat_matk" maxlength="2" style="width:14px" value="10">
					<label for="ch_stat_ratk">RAtk: </label><input type="text" id="ch_stat_ratk" data-target="stat_ratk" maxlength="2" style="width:14px">
					<label for="ch_stat_mdef">MDef: </label><input type="text" id="ch_stat_mdef" data-target="stat_mdef" maxlength="2" style="width:14px" value="10">
					<label for="ch_stat_rdef">RDef: </label><input type="text" id="ch_stat_rdef" data-target="stat_rdef" maxlength="2" style="width:14px">
				</div>
			</div>

			<div style="text-align:center;">
				<h2>Expected</h2>
				<div>
					Max
					<table class="expectation" style="margin:auto;">
						<tr class="stat_hp"><td>HP</td><td>--</td></tr>
						<tr class="stat_fat"><td>Fat</td><td>--</td></tr>
						<tr class="stat_res"><td>Res</td><td>--</td></tr>
						<tr class="stat_init"><td>Init</td><td>--</td></tr>
						<tr class="stat_matk"><td>MAtk</td><td>--</td></tr>
						<tr class="stat_ratk"><td>RAtk</td><td>--</td></tr>
						<tr class="stat_mdef"><td>MDef</td><td>--</td></tr>
						<tr class="stat_rdef"><td>RDef</td><td>--</td></tr>
					</table>
				</div>

			</div>

			<div class="container">
				<div style="text-align: center;">
					<h2 style="display: inline-block;">Predictions</h2>
					<a style="color:yellow;cursor: pointer;" onclick="$(this).closest('.container').find('div').eq(1).toggle();">[Toggle]</a>
				</div>
			
				<div style="display:grid;grid-template-columns: 1fr 1fr 1fr;">

					<div style="text-align: right;">
						Min<br>
						<table class="min_pred" style="float:right;">
							<tr><td>HP</td><td>--</td></tr>
							<tr><td>Fat</td><td>--</td></tr>
							<tr><td>Res</td><td>--</td></tr>
							<tr><td>Init</td><td>--</td></tr>
							<tr><td>MAtk</td><td>--</td></tr>
							<tr><td>RAtk</td><td>--</td></tr>
							<tr><td>MDef</td><td>--</td></tr>
							<tr><td>RDef</td><td>--</td></tr>
						</table>
					</div>

					<div style="text-align: center;">
						Average
						<table class="avg_pred" style="margin:auto;">
							<tr><td>HP</td><td>--</td></tr>
							<tr><td>Fat</td><td>--</td></tr>
							<tr><td>Res</td><td>--</td></tr>
							<tr><td>Init</td><td>--</td></tr>
							<tr><td>MAtk</td><td>--</td></tr>
							<tr><td>RAtk</td><td>--</td></tr>
							<tr><td>MDef</td><td>--</td></tr>
							<tr><td>RDef</td><td>--</td></tr>
						</table>
					</div>

					<div>
						Max
						<table class="max_pred">
							<tr><td>HP</td><td>--</td></tr>
							<tr><td>Fat</td><td>--</td></tr>
							<tr><td>Res</td><td>--</td></tr>
							<tr><td>Init</td><td>--</td></tr>
							<tr><td>MAtk</td><td>--</td></tr>
							<tr><td>RAtk</td><td>--</td></tr>
							<tr><td>MDef</td><td>--</td></tr>
							<tr><td>RDef</td><td>--</td></tr>
						</table>
					</div>
				</div>
			</div>


		</form>

		<style>
			body {
				background-color: #222;
				color: #CCC;
			}

			.backgrounds {
				float: left;
			}

			.backgrounds .tier1 span {
				color: #0C0;
			}

			.backgrounds .tier2 span {
				color: #C93;
			}

			tr.highlighted {
				/*background-color: yellow;*/
				color: #0c0;
				font-weight: bold;
			}
		</style>
		
		<!-- Get this JS somewhere else -->
		<script>

			jQuery('.distribution').on('focus', 'input', function(e,i) {
				$(e.target).select();
			});

			jQuery('form').on('change', function(e, i) {

				console.log('Fire!');

				var $tar = $(e.target);

				if ($tar.attr('id') == 'highlighter')
					{
					adjustLeveling();
					}

				if ($tar.closest('.distribution').length > 0)
					{
					if ($tar.val() != '' && $tar.val() != '0')
						{
						$('.expectation tr.' + $tar.data('target')).addClass('highlighted');
						}
					else
						{
						$('.expectation tr.' + $tar.data('target')).removeClass('highlighted');
						}
					}

				// calculateStats($tar.data('target'));

				for (stat in stat_map)
					{
					calculateStats(stat);
					}

				// $tar.css({'background-color': 'yellow'});

				});

			var max_levels = 10;

			var index_map = {
				'stat_hp': 0,
				'stat_fat': 1,
				'stat_res': 2,
				'stat_init': 3,
				'stat_matk': 4,
				'stat_ratk': 5,
				'stat_mdef': 6,
				'stat_rdef': 7,
				}

			var stat_map = {
				'stat_hp': [2,3,4],
				'stat_fat': [2,3,4],
				'stat_res': [2,3,4],
				'stat_init': [3,4,5],
				'stat_matk': [1,2,3],
				'stat_ratk': [2,3,4],
				'stat_mdef': [1,2,3],
				'stat_rdef': [2,3,4],
				}

			var profiles = {
				'2h_fighter': {'stat_fat': 10, 'stat_matk': 10, 'stat_mdef': 10},
				'archer': {'stat_ratk': 10, 'stat_rdef': 10, 'stat_init': 5, 'stat_fat': 5},
				'tank': {'stat_mdef': 10, 'stat_fat': 10, 'stat_hp': 5, 'stat_matk': 5},
				'sergeant': {'stat_mdef': 5, 'stat_rdef': 5, 'stat_matk': 5, 'stat_res': 10, 'stat_fat': 5},
				'init_fighter': {'stat_init': 10, 'stat_matk': 10, 'stat_mdef': 5, 'stat_fat': 5},
				// 'archer': ['stat_ratk', 'stat_rdef', 'stat_init'],
				// 'tank': ['stat_mdef', 'stat_fat', 'stat_hp']
			}

			function adjustLeveling()
				{
				console.log('Adjust Leveling');

				// $('input[type="checkbox"]').prop('checked', false);
				$('.distribution input').val('');
				$('.expectation tr').removeClass('highlighted');
				if ($('#highlighter').val() != 'none')
					{
					var stats = Object.keys(profiles[$('#highlighter').val()]);

					for (stat in stats)
						{
						// $('#ch_' + stats[stat]).prop('checked', true);
						// console.log(profiles[$('#highlighter').val()][stats[stat]]);
						var input_value = profiles[$('#highlighter').val()][stats[stat]];
						console.log(input_value);
						$('#ch_' + stats[stat]).val(input_value);
						$('.expectation tr.' + stats[stat]).addClass('highlighted');
						}
					}

				}

			adjustLeveling();

			function calculateStats(target_stat)
				{
				// var available_values = [];

				if (!target_stat)
					{
					return true;
					}

				var table_index = index_map[target_stat];

				var current_stats = $('#' + target_stat).val();

				var current_stars = $('#' + target_stat + '_stars').val();

				var available_values = stat_map[target_stat].slice();

				var i;
				for (i = 0; i < current_stars && i < 2;i++)
					{
					// console.log('trim');
					console.log(i + ' < ' + current_stars);
					available_values.shift();
					}

				if (current_stars == 3)
					{
					available_values.push(Math.max.apply(Math,available_values) + 1);
					}

				var min_stat = Math.min.apply(Math,available_values);
				var max_stat = Math.max.apply(Math,available_values);

				var total = 0;
				for (var i = 0; i < available_values.length; i++)
					{
					total += available_values[i];
					}
				var avg_stat = total / available_values.length;

				// console.log(available_values);

				// Average:
				var avg = Math.round(Math.floor(current_stats) + (avg_stat * max_levels));
				$('.avg_pred').find('tr').eq(table_index).find('td').eq(1).text(avg);

				var min = Math.round(Math.floor(current_stats) + (min_stat * max_levels));
				$('.min_pred').find('tr').eq(table_index).find('td').eq(1).text(min);

				var max = Math.round(Math.floor(current_stats) + (max_stat * max_levels));
				$('.max_pred').find('tr').eq(table_index).find('td').eq(1).text(max);

				// Expectation:
				if ($('#ch_' + target_stat).val() != '')
					{
					var exp = Math.round(Math.floor(current_stats) + (avg_stat * $('#ch_' + target_stat).val()));
					$('.expectation').find('tr').eq(table_index).find('td').eq(1).text(exp);
					}
				else
					{
					$('.expectation').find('tr').eq(table_index).find('td').eq(1).text(current_stats);
					}

				}

		</script>



	</body>
</html>
