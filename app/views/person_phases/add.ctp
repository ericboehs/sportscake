<div class="personPhases form">
<?php echo $form->create('PersonPhase');?>
	<fieldset>
 		<legend><?php __('Add PersonPhase');?></legend>
	<?php
		echo $form->input('person_id');
		echo $form->input('membership_type');
		echo $form->input('membership_id');
		echo $form->input('role_id');
		echo $form->input('role_status');
		echo $form->input('phase_status');
		echo $form->input('uniform_number');
		echo $form->input('regular_position_id');
		echo $form->input('regular_position_depth');
		echo $form->input('height');
		echo $form->input('weight');
		echo $form->input('start_date_time');
		echo $form->input('start_season_id');
		echo $form->input('end_date_time');
		echo $form->input('end_season_id');
		echo $form->input('entry_reason');
		echo $form->input('exit_reason');
		echo $form->input('selection_level');
		echo $form->input('selection_sublevel');
		echo $form->input('selection_overall');
		echo $form->input('duration');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List PersonPhases', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Roles', true), array('controller'=> 'roles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Role', true), array('controller'=> 'roles', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Regular Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Seasons', true), array('controller'=> 'seasons', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Start Season', true), array('controller'=> 'seasons', 'action'=>'add')); ?> </li>
	</ul>
</div>
