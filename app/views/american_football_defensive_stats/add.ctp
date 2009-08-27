<div class="americanFootballDefensiveStats form">
<?php echo $form->create('AmericanFootballDefensiveStat');?>
	<fieldset>
 		<legend><?php __('Add AmericanFootballDefensiveStat');?></legend>
	<?php
		echo $form->input('tackles_total');
		echo $form->input('tackles_solo');
		echo $form->input('tackles_assists');
		echo $form->input('interceptions_total');
		echo $form->input('interceptions_yards');
		echo $form->input('interceptions_average');
		echo $form->input('interceptions_longest');
		echo $form->input('interceptions_touchdown');
		echo $form->input('quarterback_hurries');
		echo $form->input('sacks_total');
		echo $form->input('sacks_yards');
		echo $form->input('passes_defensed');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List AmericanFootballDefensiveStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
