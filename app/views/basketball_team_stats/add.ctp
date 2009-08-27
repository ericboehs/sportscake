<div class="basketballTeamStats form">
<?php echo $form->create('BasketballTeamStat');?>
	<fieldset>
 		<legend><?php __('Add BasketballTeamStat');?></legend>
	<?php
		echo $form->input('timeouts_left');
		echo $form->input('largest_lead');
		echo $form->input('fouls_total');
		echo $form->input('turnover_margin');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List BasketballTeamStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
