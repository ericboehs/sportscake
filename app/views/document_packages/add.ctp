<div class="documentPackages form">
<?php echo $form->create('DocumentPackage');?>
	<fieldset>
 		<legend><?php __('Add DocumentPackage');?></legend>
	<?php
		echo $form->input('package_key');
		echo $form->input('package_name');
		echo $form->input('date_time');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List DocumentPackages', true), array('action'=>'index'));?></li>
	</ul>
</div>
