<div class="americanFootballPenaltiesStats form">
<?php echo $form->create('AmericanFootballPenaltiesStat');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballPenaltiesStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('penalties_total');
		echo $form->input('penalty_yards');
		echo $form->input('penalty_first_downs');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballPenaltiesStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballPenaltiesStat.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballPenaltiesStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
