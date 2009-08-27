<div class="basketballReboundingStats form">
<?php echo $form->create('BasketballReboundingStat');?>
	<fieldset>
 		<legend><?php __('Add BasketballReboundingStat');?></legend>
	<?php
		echo $form->input('rebounds_total');
		echo $form->input('rebounds_per_game');
		echo $form->input('rebounds_defensive');
		echo $form->input('rebounds_offensive');
		echo $form->input('team_rebounds_total');
		echo $form->input('team_rebounds_per_game');
		echo $form->input('team_rebounds_defensive');
		echo $form->input('team_rebounds_offensive');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List BasketballReboundingStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
