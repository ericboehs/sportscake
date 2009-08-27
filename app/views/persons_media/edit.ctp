<div class="personsMedia form">
<?php echo $form->create('PersonsMedium');?>
	<fieldset>
 		<legend><?php __('Edit PersonsMedium');?></legend>
	<?php
		echo $form->input('person_id');
		echo $form->input('media_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('PersonsMedium.person_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('PersonsMedium.person_id'))); ?></li>
		<li><?php echo $html->link(__('List PersonsMedia', true), array('action'=>'index'));?></li>
	</ul>
</div>
