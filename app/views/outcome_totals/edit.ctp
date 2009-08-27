<div class="outcomeTotals form">
<?php echo $form->create('OutcomeTotal');?>
	<fieldset>
 		<legend><?php __('Edit OutcomeTotal');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('standing_subgroup_id');
		echo $form->input('outcome_holder_type');
		echo $form->input('outcome_holder_id');
		echo $form->input('rank');
		echo $form->input('wins');
		echo $form->input('losses');
		echo $form->input('ties');
		echo $form->input('undecideds');
		echo $form->input('winning_percentage');
		echo $form->input('points_scored_for');
		echo $form->input('points_scored_against');
		echo $form->input('points_difference');
		echo $form->input('standing_points');
		echo $form->input('streak_type');
		echo $form->input('streak_duration');
		echo $form->input('streak_total');
		echo $form->input('streak_start');
		echo $form->input('streak_end');
		echo $form->input('events_played');
		echo $form->input('games_back');
		echo $form->input('result_effect');
		echo $form->input('sets_against');
		echo $form->input('sets_for');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('OutcomeTotal.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('OutcomeTotal.id'))); ?></li>
		<li><?php echo $html->link(__('List OutcomeTotals', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Standing Subgroups', true), array('controller'=> 'standing_subgroups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Standing Subgroup', true), array('controller'=> 'standing_subgroups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Outcome Holder', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
	</ul>
</div>
