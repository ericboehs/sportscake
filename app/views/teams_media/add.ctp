<div class="teamsMedia form">
<?php echo $form->create('TeamsMedium');?>
	<fieldset>
 		<legend><?php __('Add TeamsMedium');?></legend>
	<?php
		echo $form->input('media_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List TeamsMedia', true), array('action'=>'index'));?></li>
	</ul>
</div>
