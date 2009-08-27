<div class="soccerOffensiveStats form">
<?php echo $form->create('SoccerOffensiveStat');?>
	<fieldset>
 		<legend><?php __('Edit SoccerOffensiveStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('goals_game_winning');
		echo $form->input('goals_game_tying');
		echo $form->input('goals_overtime');
		echo $form->input('goals_shootout');
		echo $form->input('goals_total');
		echo $form->input('assists_game_winning');
		echo $form->input('assists_game_tying');
		echo $form->input('assists_overtime');
		echo $form->input('assists_total');
		echo $form->input('points');
		echo $form->input('shots_total');
		echo $form->input('shots_on_goal_total');
		echo $form->input('shots_hit_frame');
		echo $form->input('shots_penalty_shot_taken');
		echo $form->input('shots_penalty_shot_scored');
		echo $form->input('shots_penalty_shot_missed');
		echo $form->input('shots_penalty_shot_percentage');
		echo $form->input('shots_shootout_taken');
		echo $form->input('shots_shootout_scored');
		echo $form->input('shots_shootout_missed');
		echo $form->input('shots_shootout_percentage');
		echo $form->input('giveaways');
		echo $form->input('offsides');
		echo $form->input('corner_kicks');
		echo $form->input('hat_tricks');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('SoccerOffensiveStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('SoccerOffensiveStat.id'))); ?></li>
		<li><?php echo $html->link(__('List SoccerOffensiveStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
