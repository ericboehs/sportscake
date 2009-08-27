<div class="keyRoots form">
<?php echo $form->create('KeyRoot');?>
	<fieldset>
 		<legend><?php __('Edit KeyRoot');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('key_type');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('KeyRoot.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('KeyRoot.id'))); ?></li>
		<li><?php echo $html->link(__('List KeyRoots', true), array('action'=>'index'));?></li>
	</ul>
</div>
