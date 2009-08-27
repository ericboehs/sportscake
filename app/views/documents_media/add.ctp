<div class="documentsMedia form">
<?php echo $form->create('DocumentsMedium');?>
	<fieldset>
 		<legend><?php __('Add DocumentsMedium');?></legend>
	<?php
		echo $form->input('document_id');
		echo $form->input('media_id');
		echo $form->input('media_caption_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List DocumentsMedia', true), array('action'=>'index'));?></li>
	</ul>
</div>
