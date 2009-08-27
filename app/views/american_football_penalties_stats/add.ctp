<div class="americanFootballPenaltiesStats form">
<?php echo $form->create('AmericanFootballPenaltiesStat');?>
	<fieldset>
 		<legend><?php __('Add AmericanFootballPenaltiesStat');?></legend>
	<?php
		echo $form->input('penalties_total');
		echo $form->input('penalty_yards');
		echo $form->input('penalty_first_downs');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List AmericanFootballPenaltiesStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
