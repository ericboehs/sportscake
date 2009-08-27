<div class="americanFootballPassingStats form">
<?php echo $form->create('AmericanFootballPassingStat');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballPassingStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('passes_attempts');
		echo $form->input('passes_completions');
		echo $form->input('passes_percentage');
		echo $form->input('passes_yards_gross');
		echo $form->input('passes_yards_net');
		echo $form->input('passes_yards_lost');
		echo $form->input('passes_touchdowns');
		echo $form->input('passes_touchdowns_percentage');
		echo $form->input('passes_interceptions');
		echo $form->input('passes_interceptions_percentage');
		echo $form->input('passes_longest');
		echo $form->input('passes_average_yards_per');
		echo $form->input('passer_rating');
		echo $form->input('receptions_total');
		echo $form->input('receptions_yards');
		echo $form->input('receptions_touchdowns');
		echo $form->input('receptions_first_down');
		echo $form->input('receptions_longest');
		echo $form->input('receptions_average_yards_per');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballPassingStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballPassingStat.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballPassingStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
