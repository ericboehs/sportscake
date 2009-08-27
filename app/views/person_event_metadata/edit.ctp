<div class="personEventMetadata form">
<?php echo $form->create('PersonEventMetadatum');?>
	<fieldset>
 		<legend><?php __('Edit PersonEventMetadatum');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('person_id');
		echo $form->input('event_id');
		echo $form->input('status');
		echo $form->input('health');
		echo $form->input('weight');
		echo $form->input('role_id');
		echo $form->input('position_id');
		echo $form->input('team_id');
		echo $form->input('lineup_slot');
		echo $form->input('lineup_slot_sequence');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('PersonEventMetadatum.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('PersonEventMetadatum.id'))); ?></li>
		<li><?php echo $html->link(__('List PersonEventMetadata', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Roles', true), array('controller'=> 'roles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Role', true), array('controller'=> 'roles', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
	</ul>
</div>
