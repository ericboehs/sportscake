<div class="tennisServiceStats form">
<?php echo $form->create('TennisServiceStat');?>
	<fieldset>
 		<legend><?php __('Edit TennisServiceStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('services_played');
		echo $form->input('matches_played');
		echo $form->input('aces');
		echo $form->input('first_services_good');
		echo $form->input('first_services_good_pct');
		echo $form->input('first_service_points_won');
		echo $form->input('first_service_points_won_pct');
		echo $form->input('second_service_points_won');
		echo $form->input('second_service_points_won_pct');
		echo $form->input('service_games_played');
		echo $form->input('service_games_won');
		echo $form->input('service_games_won_pct');
		echo $form->input('break_points_played');
		echo $form->input('break_points_saved');
		echo $form->input('break_points_saved_pct');
		echo $form->input('service_points_won');
		echo $form->input('service_points_won_pct');
		echo $form->input('double_faults');
		echo $form->input('first_service_top_speed');
		echo $form->input('second_services_good');
		echo $form->input('second_services_good_pct');
		echo $form->input('second_service_top_speed');
		echo $form->input('net_points_won');
		echo $form->input('net_points_played');
		echo $form->input('points_won');
		echo $form->input('winners');
		echo $form->input('unforced_errors');
		echo $form->input('winners_forehand');
		echo $form->input('winners_backhand');
		echo $form->input('winners_volley');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('TennisServiceStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('TennisServiceStat.id'))); ?></li>
		<li><?php echo $html->link(__('List TennisServiceStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
