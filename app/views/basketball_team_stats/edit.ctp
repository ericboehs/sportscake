<div class="basketballTeamStats form">
<?php echo $form->create('BasketballTeamStat');?>
	<fieldset>
 		<legend><?php __('Edit BasketballTeamStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('timeouts_left');
		echo $form->input('largest_lead');
		echo $form->input('fouls_total');
		echo $form->input('turnover_margin');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('BasketballTeamStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('BasketballTeamStat.id'))); ?></li>
		<li><?php echo $html->link(__('List BasketballTeamStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
