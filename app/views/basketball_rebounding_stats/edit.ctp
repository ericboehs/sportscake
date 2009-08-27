<div class="basketballReboundingStats form">
<?php echo $form->create('BasketballReboundingStat');?>
	<fieldset>
 		<legend><?php __('Edit BasketballReboundingStat');?></legend>
	<?php
		echo $form->input('id');
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('BasketballReboundingStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('BasketballReboundingStat.id'))); ?></li>
		<li><?php echo $html->link(__('List BasketballReboundingStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
