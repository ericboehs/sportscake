<div class="americanFootballTeamStats form">
<?php echo $form->create('AmericanFootballTeamStat');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballTeamStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('yards_per_attempt');
		echo $form->input('average_starting_position');
		echo $form->input('timeouts');
		echo $form->input('time_of_possession');
		echo $form->input('turnover_ratio');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballTeamStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballTeamStat.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballTeamStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
