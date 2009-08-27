<div class="wageringStraightSpreadLines form">
<?php echo $form->create('WageringStraightSpreadLine');?>
	<fieldset>
 		<legend><?php __('Edit WageringStraightSpreadLine');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('bookmaker_id');
		echo $form->input('event_id');
		echo $form->input('date_time');
		echo $form->input('team_id');
		echo $form->input('person_id');
		echo $form->input('rotation_key');
		echo $form->input('comment');
		echo $form->input('vigorish');
		echo $form->input('line_value');
		echo $form->input('line_value_opening');
		echo $form->input('prediction');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('WageringStraightSpreadLine.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('WageringStraightSpreadLine.id'))); ?></li>
		<li><?php echo $html->link(__('List WageringStraightSpreadLines', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Bookmakers', true), array('controller'=> 'bookmakers', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Bookmaker', true), array('controller'=> 'bookmakers', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
