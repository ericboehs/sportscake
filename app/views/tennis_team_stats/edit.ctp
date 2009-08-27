<div class="tennisTeamStats form">
<?php echo $form->create('TennisTeamStat');?>
	<fieldset>
 		<legend><?php __('Edit TennisTeamStat');?></legend>
	<?php
		echo $form->input('id');
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('TennisTeamStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('TennisTeamStat.id'))); ?></li>
		<li><?php echo $html->link(__('List TennisTeamStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
