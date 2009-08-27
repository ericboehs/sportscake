<div class="tennisPlayerStats form">
<?php echo $form->create('TennisPlayerStat');?>
	<fieldset>
 		<legend><?php __('Add TennisPlayerStat');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List TennisPlayerStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
