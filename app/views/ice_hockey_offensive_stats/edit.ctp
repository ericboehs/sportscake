<div class="iceHockeyOffensiveStats form">
<?php echo $form->create('IceHockeyOffensiveStat');?>
	<fieldset>
 		<legend><?php __('Edit IceHockeyOffensiveStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('goals_game_winning');
		echo $form->input('goals_game_tying');
		echo $form->input('goals_power_play');
		echo $form->input('goals_short_handed');
		echo $form->input('goals_even_strength');
		echo $form->input('goals_empty_net');
		echo $form->input('goals_overtime');
		echo $form->input('goals_shootout');
		echo $form->input('goals_penalty_shot');
		echo $form->input('assists');
		echo $form->input('points');
		echo $form->input('power_play_amount');
		echo $form->input('power_play_percentage');
		echo $form->input('shots_penalty_shot_taken');
		echo $form->input('shots_penalty_shot_missed');
		echo $form->input('shots_penalty_shot_percentage');
		echo $form->input('giveaways');
		echo $form->input('minutes_power_play');
		echo $form->input('faceoff_wins');
		echo $form->input('faceoff_losses');
		echo $form->input('faceoff_win_percentage');
		echo $form->input('scoring_chances');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('IceHockeyOffensiveStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IceHockeyOffensiveStat.id'))); ?></li>
		<li><?php echo $html->link(__('List IceHockeyOffensiveStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
