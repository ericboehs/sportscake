<div class="soccerFoulStats form">
<?php echo $form->create('SoccerFoulStat');?>
	<fieldset>
 		<legend><?php __('Edit SoccerFoulStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('fouls_suffered');
		echo $form->input('fouls_commited');
		echo $form->input('cautions_total');
		echo $form->input('cautions_pending');
		echo $form->input('caution_points_total');
		echo $form->input('caution_points_pending');
		echo $form->input('ejections_total');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('SoccerFoulStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('SoccerFoulStat.id'))); ?></li>
		<li><?php echo $html->link(__('List SoccerFoulStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
