<div class="basketballOffensiveStats form">
<?php echo $form->create('BasketballOffensiveStat');?>
	<fieldset>
 		<legend><?php __('Edit BasketballOffensiveStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('field_goals_made');
		echo $form->input('field_goals_attempted');
		echo $form->input('field_goals_percentage');
		echo $form->input('field_goals_per_game');
		echo $form->input('field_goals_attempted_per_game');
		echo $form->input('field_goals_percentage_adjusted');
		echo $form->input('three_pointers_made');
		echo $form->input('three_pointers_attempted');
		echo $form->input('three_pointers_percentage');
		echo $form->input('three_pointers_per_game');
		echo $form->input('three_pointers_attempted_per_game');
		echo $form->input('free_throws_made');
		echo $form->input('free_throws_attempted');
		echo $form->input('free_throws_percentage');
		echo $form->input('free_throws_per_game');
		echo $form->input('free_throws_attempted_per_game');
		echo $form->input('points_scored_total');
		echo $form->input('points_scored_per_game');
		echo $form->input('assists_total');
		echo $form->input('assists_per_game');
		echo $form->input('turnovers_total');
		echo $form->input('turnovers_per_game');
		echo $form->input('points_scored_off_turnovers');
		echo $form->input('points_scored_in_paint');
		echo $form->input('points_scored_on_second_chance');
		echo $form->input('points_scored_on_fast_break');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('BasketballOffensiveStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('BasketballOffensiveStat.id'))); ?></li>
		<li><?php echo $html->link(__('List BasketballOffensiveStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
