<div class="mediaContents form">
<?php echo $form->create('MediaContent');?>
	<fieldset>
 		<legend><?php __('Edit MediaContent');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('media_id');
		echo $form->input('object');
		echo $form->input('format');
		echo $form->input('mime_type');
		echo $form->input('height');
		echo $form->input('width');
		echo $form->input('duration');
		echo $form->input('file_size');
		echo $form->input('resolution');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('MediaContent.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('MediaContent.id'))); ?></li>
		<li><?php echo $html->link(__('List MediaContents', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
	</ul>
</div>
