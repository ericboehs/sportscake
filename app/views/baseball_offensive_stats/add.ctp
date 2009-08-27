<div class="baseballOffensiveStats form">
<?php echo $form->create('BaseballOffensiveStat');?>
	<fieldset>
 		<legend><?php __('Add BaseballOffensiveStat');?></legend>
	<?php
		echo $form->input('average');
		echo $form->input('runs_scored');
		echo $form->input('at_bats');
		echo $form->input('hits');
		echo $form->input('rbi');
		echo $form->input('total_bases');
		echo $form->input('slugging_percentage');
		echo $form->input('bases_on_balls');
		echo $form->input('strikeouts');
		echo $form->input('left_on_base');
		echo $form->input('left_in_scoring_position');
		echo $form->input('singles');
		echo $form->input('doubles');
		echo $form->input('triples');
		echo $form->input('home_runs');
		echo $form->input('grand_slams');
		echo $form->input('at_bats_per_rbi');
		echo $form->input('plate_appearances_per_rbi');
		echo $form->input('at_bats_per_home_run');
		echo $form->input('plate_appearances_per_home_run');
		echo $form->input('sac_flies');
		echo $form->input('sac_bunts');
		echo $form->input('grounded_into_double_play');
		echo $form->input('moved_up');
		echo $form->input('on_base_percentage');
		echo $form->input('stolen_bases');
		echo $form->input('stolen_bases_caught');
		echo $form->input('stolen_bases_average');
		echo $form->input('hit_by_pitch');
		echo $form->input('defensive_interferance_reaches');
		echo $form->input('on_base_plus_slugging');
		echo $form->input('plate_appearances');
		echo $form->input('hits_extra_base');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List BaseballOffensiveStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
