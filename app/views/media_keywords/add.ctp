<div class="mediaKeywords form">
<?php echo $form->create('MediaKeyword');?>
	<fieldset>
 		<legend><?php __('Add MediaKeyword');?></legend>
	<?php
		echo $form->input('keyword');
		echo $form->input('media_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List MediaKeywords', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Media', true), array('controller'=> 'media', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Media', true), array('controller'=> 'media', 'action'=>'add')); ?> </li>
	</ul>
</div>
