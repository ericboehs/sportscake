<div class="americanFootballSacksAgainstStats form">
<?php echo $form->create('AmericanFootballSacksAgainstStat');?>
	<fieldset>
 		<legend><?php __('Add AmericanFootballSacksAgainstStat');?></legend>
	<?php
		echo $form->input('sacks_against_yards');
		echo $form->input('sacks_against_total');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List AmericanFootballSacksAgainstStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
