<div class="keyAliases form">
<?php echo $form->create('KeyAlias');?>
	<fieldset>
 		<legend><?php __('Add KeyAlias');?></legend>
	<?php
		echo $form->input('key_id');
		echo $form->input('key_root_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List KeyAliases', true), array('action'=>'index'));?></li>
	</ul>
</div>
