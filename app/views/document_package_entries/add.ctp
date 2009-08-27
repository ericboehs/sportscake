<div class="documentPackageEntries form">
<?php echo $form->create('DocumentPackageEntry');?>
	<fieldset>
 		<legend><?php __('Add DocumentPackageEntry');?></legend>
	<?php
		echo $form->input('document_package_id');
		echo $form->input('rank');
		echo $form->input('document_id');
		echo $form->input('headline');
		echo $form->input('short_headline');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List DocumentPackageEntries', true), array('action'=>'index'));?></li>
	</ul>
</div>
