<div class="seasons form">
<?php echo $form->create('Season');?>
	<fieldset>
 		<legend><?php __('Add Season');?></legend>
	<?php
		echo $form->input('season_key');
		echo $form->input('name');
		echo $form->input('publisher_id');
		echo $form->input('league_id');
		echo $form->input('start_date_time');
		echo $form->input('end_date_time');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Seasons', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Publishers', true), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Leagues', true), array('controller' => 'leagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New League', true), array('controller' => 'leagues', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Injury Phases', true), array('controller' => 'injury_phases', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Injury Phase', true), array('controller' => 'injury_phases', 'action' => 'add')); ?> </li>
	</ul>
</div>
