<div class="americanFootballDownProgressStats form">
<?php echo $form->create('AmericanFootballDownProgressStat');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballDownProgressStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('first_downs_total');
		echo $form->input('first_downs_pass');
		echo $form->input('first_downs_run');
		echo $form->input('first_downs_penalty');
		echo $form->input('conversions_third_down');
		echo $form->input('conversions_third_down_attempts');
		echo $form->input('conversions_third_down_percentage');
		echo $form->input('conversions_fourth_down');
		echo $form->input('conversions_fourth_down_attempts');
		echo $form->input('conversions_fourth_down_percentage');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballDownProgressStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballDownProgressStat.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballDownProgressStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
