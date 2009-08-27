<div class="personsMedia form">
<?php echo $form->create('PersonsMedium');?>
	<fieldset>
 		<legend><?php __('Add PersonsMedium');?></legend>
	<?php
		echo $form->input('media_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List PersonsMedia', true), array('action'=>'index'));?></li>
	</ul>
</div>
