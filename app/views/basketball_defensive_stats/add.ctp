<div class="basketballDefensiveStats form">
<?php echo $form->create('BasketballDefensiveStat');?>
	<fieldset>
 		<legend><?php __('Add BasketballDefensiveStat');?></legend>
	<?php
		echo $form->input('steals_total');
		echo $form->input('steals_per_game');
		echo $form->input('blocks_total');
		echo $form->input('blocks_per_game');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List BasketballDefensiveStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
