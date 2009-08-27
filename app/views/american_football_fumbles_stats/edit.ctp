<div class="americanFootballFumblesStats form">
<?php echo $form->create('AmericanFootballFumblesStat');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballFumblesStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('fumbles_committed');
		echo $form->input('fumbles_forced');
		echo $form->input('fumbles_recovered');
		echo $form->input('fumbles_lost');
		echo $form->input('fumbles_yards_gained');
		echo $form->input('fumbles_own_committed');
		echo $form->input('fumbles_own_recovered');
		echo $form->input('fumbles_own_lost');
		echo $form->input('fumbles_own_yards_gained');
		echo $form->input('fumbles_opposing_committed');
		echo $form->input('fumbles_opposing_recovered');
		echo $form->input('fumbles_opposing_lost');
		echo $form->input('fumbles_opposing_yards_gained');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballFumblesStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballFumblesStat.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballFumblesStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
