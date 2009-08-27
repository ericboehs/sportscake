<div class="penaltyStats form">
<?php echo $form->create('PenaltyStat');?>
	<fieldset>
 		<legend><?php __('Edit PenaltyStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('count');
		echo $form->input('type');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('PenaltyStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('PenaltyStat.id'))); ?></li>
		<li><?php echo $html->link(__('List PenaltyStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
