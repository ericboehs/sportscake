<div class="baseballPitchingStats form">
<?php echo $form->create('BaseballPitchingStat');?>
	<fieldset>
 		<legend><?php __('Edit BaseballPitchingStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('runs_allowed');
		echo $form->input('singles_allowed');
		echo $form->input('doubles_allowed');
		echo $form->input('triples_allowed');
		echo $form->input('home_runs_allowed');
		echo $form->input('innings_pitched');
		echo $form->input('hits');
		echo $form->input('earned_runs');
		echo $form->input('unearned_runs');
		echo $form->input('bases_on_balls');
		echo $form->input('bases_on_balls_intentional');
		echo $form->input('strikeouts');
		echo $form->input('strikeout_to_bb_ratio');
		echo $form->input('number_of_pitches');
		echo $form->input('era');
		echo $form->input('inherited_runners_scored');
		echo $form->input('pick_offs');
		echo $form->input('errors_hit_with_pitch');
		echo $form->input('errors_wild_pitch');
		echo $form->input('balks');
		echo $form->input('wins');
		echo $form->input('losses');
		echo $form->input('saves');
		echo $form->input('shutouts');
		echo $form->input('games_complete');
		echo $form->input('games_finished');
		echo $form->input('winning_percentage');
		echo $form->input('event_credit');
		echo $form->input('save_credit');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('BaseballPitchingStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('BaseballPitchingStat.id'))); ?></li>
		<li><?php echo $html->link(__('List BaseballPitchingStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
