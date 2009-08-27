<div class="iceHockeyPlayerStats form">
<?php echo $form->create('IceHockeyPlayerStat');?>
	<fieldset>
 		<legend><?php __('Add IceHockeyPlayerStat');?></legend>
	<?php
		echo $form->input('plus_minus');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List IceHockeyPlayerStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
