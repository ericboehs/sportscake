<div class="awards form">
<?php echo $form->create('Award');?>
	<fieldset>
 		<legend><?php __('Edit Award');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('participant_type');
		echo $form->input('participant_id');
		echo $form->input('award_type');
		echo $form->input('name');
		echo $form->input('total');
		echo $form->input('rank');
		echo $form->input('award_value');
		echo $form->input('currency');
		echo $form->input('date_coverage_type');
		echo $form->input('date_coverage_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Award.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Award.id'))); ?></li>
		<li><?php echo $html->link(__('List Awards', true), array('action'=>'index'));?></li>
	</ul>
</div>
