<div class="mediaCaptions form">
<?php echo $form->create('MediaCaption');?>
	<fieldset>
 		<legend><?php __('Add MediaCaption');?></legend>
	<?php
		echo $form->input('media_id');
		echo $form->input('caption_type');
		echo $form->input('caption');
		echo $form->input('caption_author_id');
		echo $form->input('language');
		echo $form->input('caption_size');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List MediaCaptions', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Caption Author', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Documents Media', true), array('controller'=> 'documents_media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Documents Medium', true), array('controller'=> 'documents_media', 'action'=>'add')); ?> </li>
	</ul>
</div>
