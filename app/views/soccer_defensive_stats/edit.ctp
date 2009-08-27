<div class="soccerDefensiveStats form">
<?php echo $form->create('SoccerDefensiveStat');?>
	<fieldset>
 		<legend><?php __('Edit SoccerDefensiveStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('shots_penalty_shot_allowed');
		echo $form->input('goals_penalty_shot_allowed');
		echo $form->input('goals_against_average');
		echo $form->input('goals_against_total');
		echo $form->input('saves');
		echo $form->input('save_percentage');
		echo $form->input('catches_punches');
		echo $form->input('shots_on_goal_total');
		echo $form->input('shots_shootout_total');
		echo $form->input('shots_shootout_allowed');
		echo $form->input('shots_blocked');
		echo $form->input('shutouts');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('SoccerDefensiveStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('SoccerDefensiveStat.id'))); ?></li>
		<li><?php echo $html->link(__('List SoccerDefensiveStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
