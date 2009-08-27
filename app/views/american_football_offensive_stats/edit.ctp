<div class="americanFootballOffensiveStats form">
<?php echo $form->create('AmericanFootballOffensiveStat');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballOffensiveStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('offensive_plays_yards');
		echo $form->input('offensive_plays_number');
		echo $form->input('offensive_plays_average_yards_per');
		echo $form->input('possession_duration');
		echo $form->input('turnovers_giveaway');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballOffensiveStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballOffensiveStat.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballOffensiveStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
