<div class="soccerActionSubstitutions form">
<?php echo $form->create('SoccerActionSubstitution');?>
	<fieldset>
 		<legend><?php __('Add SoccerActionSubstitution');?></legend>
	<?php
		echo $form->input('soccer_event_state_id');
		echo $form->input('person_type');
		echo $form->input('person_original_id');
		echo $form->input('person_original_position_id');
		echo $form->input('person_replacing_id');
		echo $form->input('person_replacing_position_id');
		echo $form->input('substitution_reason');
		echo $form->input('comment');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List SoccerActionSubstitutions', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Soccer Event States', true), array('controller'=> 'soccer_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Event State', true), array('controller'=> 'soccer_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Original', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Original Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
	</ul>
</div>
