<div class="soccerActionFouls form">
<?php echo $form->create('SoccerActionFoul');?>
	<fieldset>
 		<legend><?php __('Edit SoccerActionFoul');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('soccer_event_state_id');
		echo $form->input('foul_name');
		echo $form->input('foul_result');
		echo $form->input('foul_type');
		echo $form->input('fouler_id');
		echo $form->input('recipient_type');
		echo $form->input('recipient_id');
		echo $form->input('comment');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('SoccerActionFoul.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('SoccerActionFoul.id'))); ?></li>
		<li><?php echo $html->link(__('List SoccerActionFouls', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Soccer Event States', true), array('controller'=> 'soccer_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Event State', true), array('controller'=> 'soccer_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Fouler', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
	</ul>
</div>
