<div class="weatherConditions form">
<?php echo $form->create('WeatherCondition');?>
	<fieldset>
 		<legend><?php __('Add WeatherCondition');?></legend>
	<?php
		echo $form->input('event_id');
		echo $form->input('temperature');
		echo $form->input('temperature_units');
		echo $form->input('humidity');
		echo $form->input('clouds');
		echo $form->input('wind_direction');
		echo $form->input('wind_velocity');
		echo $form->input('weather_code');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List WeatherConditions', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
	</ul>
</div>
