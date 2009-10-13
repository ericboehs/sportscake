<div class="conferences form">
<?php echo $form->create('Conference');?>
	<fieldset>
 		<legend><?php __('Edit Conference');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('conference_key');
		echo $form->input('league_id');
		echo $form->input('name');
		echo $form->input('shortname');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Conference.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Conference.id'))); ?></li>
		<li><?php echo $html->link(__('List Conferences', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Leagues', true), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League', true), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Divisions', true), array('controller' => 'divisions', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Division', true), array('controller' => 'divisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
