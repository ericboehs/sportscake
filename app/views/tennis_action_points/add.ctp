<div class="tennisActionPoints form">
<?php echo $form->create('TennisActionPoint');?>
	<fieldset>
 		<legend><?php __('Add TennisActionPoint');?></legend>
	<?php
		echo $form->input('sub_period_id');
		echo $form->input('sequence_number');
		echo $form->input('win_type');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List TennisActionPoints', true), array('action'=>'index'));?></li>
	</ul>
</div>
