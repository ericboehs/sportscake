<div class="tennisReturnStats form">
<?php echo $form->create('TennisReturnStat');?>
	<fieldset>
 		<legend><?php __('Add TennisReturnStat');?></legend>
	<?php
		echo $form->input('returns_played');
		echo $form->input('matches_played');
		echo $form->input('first_service_return_points_won');
		echo $form->input('first_service_return_points_won_pct');
		echo $form->input('second_service_return_points_won');
		echo $form->input('second_service_return_points_won_pct');
		echo $form->input('return_games_played');
		echo $form->input('return_games_won');
		echo $form->input('return_games_won_pct');
		echo $form->input('break_points_played');
		echo $form->input('break_points_converted');
		echo $form->input('break_points_converted_pct');
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
		<li><?php echo $html->link(__('List TennisReturnStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
