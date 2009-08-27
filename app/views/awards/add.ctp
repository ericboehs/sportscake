<div class="awards form">
<?php echo $form->create('Award');?>
	<fieldset>
 		<legend><?php __('Add Award');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List Awards', true), array('action'=>'index'));?></li>
	</ul>
</div>
