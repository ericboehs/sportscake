<div class="iceHockeyPlayerStats form">
<?php echo $form->create('IceHockeyPlayerStat');?>
	<fieldset>
 		<legend><?php __('Edit IceHockeyPlayerStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('plus_minus');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('IceHockeyPlayerStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('IceHockeyPlayerStat.id'))); ?></li>
		<li><?php echo $html->link(__('List IceHockeyPlayerStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
