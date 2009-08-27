<div class="teamsMedia form">
<?php echo $form->create('TeamsMedium');?>
	<fieldset>
 		<legend><?php __('Edit TeamsMedium');?></legend>
	<?php
		echo $form->input('team_id');
		echo $form->input('media_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('TeamsMedium.team_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('TeamsMedium.team_id'))); ?></li>
		<li><?php echo $html->link(__('List TeamsMedia', true), array('action'=>'index'));?></li>
	</ul>
</div>
