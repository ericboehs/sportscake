<div class="dbInfos form">
<?php echo $form->create('DbInfo');?>
	<fieldset>
 		<legend><?php __('Edit DbInfo');?></legend>
	<?php
		echo $form->input('version');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('DbInfo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('DbInfo.id'))); ?></li>
		<li><?php echo $html->link(__('List DbInfos', true), array('action'=>'index'));?></li>
	</ul>
</div>
