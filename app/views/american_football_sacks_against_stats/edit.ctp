<div class="americanFootballSacksAgainstStats form">
<?php echo $form->create('AmericanFootballSacksAgainstStat');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballSacksAgainstStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('sacks_against_yards');
		echo $form->input('sacks_against_total');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballSacksAgainstStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballSacksAgainstStat.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballSacksAgainstStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
