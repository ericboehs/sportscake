<div class="dbInfos form">
<?php echo $form->create('DbInfo');?>
	<fieldset>
 		<legend><?php __('Add DbInfo');?></legend>
	<?php
		echo $form->input('version');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List DbInfos', true), array('action'=>'index'));?></li>
	</ul>
</div>
