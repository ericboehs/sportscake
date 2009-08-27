<div class="americanFootballFumblesStats form">
<?php echo $form->create('AmericanFootballFumblesStat');?>
	<fieldset>
 		<legend><?php __('Add AmericanFootballFumblesStat');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List AmericanFootballFumblesStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
