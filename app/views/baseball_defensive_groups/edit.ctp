<div class="baseballDefensiveGroups form">
<?php echo $form->create('BaseballDefensiveGroup');?>
	<fieldset>
 		<legend><?php __('Edit BaseballDefensiveGroup');?></legend>
	<?php
		echo $form->input('id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('BaseballDefensiveGroup.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('BaseballDefensiveGroup.id'))); ?></li>
		<li><?php echo $html->link(__('List BaseballDefensiveGroups', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Baseball Action Pitches', true), array('controller'=> 'baseball_action_pitches', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Pitch', true), array('controller'=> 'baseball_action_pitches', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Plays', true), array('controller'=> 'baseball_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Play', true), array('controller'=> 'baseball_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Players', true), array('controller'=> 'baseball_defensive_players', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Player', true), array('controller'=> 'baseball_defensive_players', 'action'=>'add')); ?> </li>
	</ul>
</div>
