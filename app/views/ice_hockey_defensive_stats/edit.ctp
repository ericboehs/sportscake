<div class="iceHockeyDefensiveStats form">
<?php echo $form->create('IceHockeyDefensiveStat');?>
	<fieldset>
 		<legend><?php __('Edit IceHockeyDefensiveStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('shots_power_play_allowed');
		echo $form->input('shots_penalty_shot_allowed');
		echo $form->input('goals_power_play_allowed');
		echo $form->input('goals_penalty_shot_allowed');
		echo $form->input('goals_against_average');
		echo $form->input('saves');
		echo $form->input('save_percentage');
		echo $form->input('penalty_killing_amount');
		echo $form->input('penalty_killing_percentage');
		echo $form->input('shots_blocked');
		echo $form->input('takeaways');
		echo $form->input('shutouts');
		echo $form->input('minutes_penalty_killing');
		echo $form->input('hits');
		echo $form->input('goals_empty_net_allowed');
		echo $form->input('goals_short_handed_allowed');
		echo $form->input('goals_shootout_allowed');
		echo $form->input('shots_shootout_allowed');
		echo $form->input('goaltender_wins');
		echo $form->input('goaltender_losses');
		echo $form->input('goaltender_ties');
		echo $form->input('goals_allowed');
		echo $form->input('shots_allowed');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('IceHockeyDefensiveStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IceHockeyDefensiveStat.id'))); ?></li>
		<li><?php echo $html->link(__('List IceHockeyDefensiveStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
