<div class="americanFootballRushingStats form">
<?php echo $form->create('AmericanFootballRushingStat');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballRushingStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('rushes_attempts');
		echo $form->input('rushes_yards');
		echo $form->input('rushes_touchdowns');
		echo $form->input('rushing_average_yards_per');
		echo $form->input('rushes_first_down');
		echo $form->input('rushes_longest');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballRushingStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballRushingStat.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballRushingStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
