<div class="keyRoots form">
<?php echo $form->create('KeyRoot');?>
	<fieldset>
 		<legend><?php __('Add KeyRoot');?></legend>
	<?php
		echo $form->input('key_type');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List KeyRoots', true), array('action'=>'index'));?></li>
	</ul>
</div>
