<div class="motorRacingRaceStats form">
<?php echo $form->create('MotorRacingRaceStat');?>
	<fieldset>
 		<legend><?php __('Edit MotorRacingRaceStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('time_behind_leader');
		echo $form->input('laps_behind_leader');
		echo $form->input('time_ahead_follower');
		echo $form->input('laps_ahead_follower');
		echo $form->input('time');
		echo $form->input('points');
		echo $form->input('points_rookie');
		echo $form->input('bonus');
		echo $form->input('laps_completed');
		echo $form->input('laps_leading_total');
		echo $form->input('distance_leading');
		echo $form->input('distance_completed');
		echo $form->input('distance_units');
		echo $form->input('speed_average');
		echo $form->input('speed_units');
		echo $form->input('status');
		echo $form->input('finishes_top_5');
		echo $form->input('finishes_top_10');
		echo $form->input('starts');
		echo $form->input('finishes');
		echo $form->input('non_finishes');
		echo $form->input('wins');
		echo $form->input('races_leading');
		echo $form->input('money');
		echo $form->input('money_units');
		echo $form->input('leads_total');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('MotorRacingRaceStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('MotorRacingRaceStat.id'))); ?></li>
		<li><?php echo $html->link(__('List MotorRacingRaceStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
