<div class="injuryPhases form">
<?php echo $form->create('InjuryPhase');?>
	<fieldset>
 		<legend><?php __('Add InjuryPhase');?></legend>
	<?php
		echo $form->input('person_id');
		echo $form->input('injury_status');
		echo $form->input('injury_type');
		echo $form->input('injury_comment');
		echo $form->input('disabled_list');
		echo $form->input('start_date_time');
		echo $form->input('end_date_time');
		echo $form->input('season_id');
		echo $form->input('phase_type');
		echo $form->input('injury_side');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List InjuryPhases', true), array('action'=>'index'));?></li>
	</ul>
</div>
