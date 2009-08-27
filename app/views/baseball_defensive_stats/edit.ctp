<div class="baseballDefensiveStats form">
<?php echo $form->create('BaseballDefensiveStat');?>
	<fieldset>
 		<legend><?php __('Edit BaseballDefensiveStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('double_plays');
		echo $form->input('triple_plays');
		echo $form->input('putouts');
		echo $form->input('assists');
		echo $form->input('errors');
		echo $form->input('fielding_percentage');
		echo $form->input('defensive_average');
		echo $form->input('errors_passed_ball');
		echo $form->input('errors_catchers_interference');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('BaseballDefensiveStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('BaseballDefensiveStat.id'))); ?></li>
		<li><?php echo $html->link(__('List BaseballDefensiveStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
