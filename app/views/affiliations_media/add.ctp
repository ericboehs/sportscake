<div class="affiliationsMedia form">
<?php echo $form->create('AffiliationsMedium');?>
	<fieldset>
 		<legend><?php __('Add AffiliationsMedium');?></legend>
	<?php
		echo $form->input('media_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List AffiliationsMedia', true), array('action'=>'index'));?></li>
	</ul>
</div>
