<div class="americanFootballScoringStats form">
<?php echo $form->create('AmericanFootballScoringStat');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballScoringStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('touchdowns_total');
		echo $form->input('touchdowns_passing');
		echo $form->input('touchdowns_rushing');
		echo $form->input('touchdowns_special_teams');
		echo $form->input('touchdowns_defensive');
		echo $form->input('extra_points_attempts');
		echo $form->input('extra_points_made');
		echo $form->input('extra_points_missed');
		echo $form->input('extra_points_blocked');
		echo $form->input('field_goal_attempts');
		echo $form->input('field_goals_made');
		echo $form->input('field_goals_missed');
		echo $form->input('field_goals_blocked');
		echo $form->input('safeties_against');
		echo $form->input('two_point_conversions_attempts');
		echo $form->input('two_point_conversions_made');
		echo $form->input('touchbacks_total');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballScoringStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballScoringStat.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballScoringStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
