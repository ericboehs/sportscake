<div class="documentClasses form">
<?php echo $form->create('DocumentClass');?>
	<fieldset>
 		<legend><?php __('Add DocumentClass');?></legend>
	<?php
		echo $form->input('name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List DocumentClasses', true), array('action'=>'index'));?></li>
	</ul>
</div>
