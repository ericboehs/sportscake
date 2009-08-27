<div class="soccerFoulStats form">
<?php echo $form->create('SoccerFoulStat');?>
	<fieldset>
 		<legend><?php __('Add SoccerFoulStat');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List SoccerFoulStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
