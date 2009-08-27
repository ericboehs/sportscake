<div class="americanFootballSpecialTeamsStats form">
<?php echo $form->create('AmericanFootballSpecialTeamsStat');?>
	<fieldset>
 		<legend><?php __('Edit AmericanFootballSpecialTeamsStat');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('returns_punt_total');
		echo $form->input('returns_punt_yards');
		echo $form->input('returns_punt_average');
		echo $form->input('returns_punt_longest');
		echo $form->input('returns_punt_touchdown');
		echo $form->input('returns_kickoff_total');
		echo $form->input('returns_kickoff_yards');
		echo $form->input('returns_kickoff_average');
		echo $form->input('returns_kickoff_longest');
		echo $form->input('returns_kickoff_touchdown');
		echo $form->input('returns_total');
		echo $form->input('returns_yards');
		echo $form->input('punts_total');
		echo $form->input('punts_yards_gross');
		echo $form->input('punts_yards_net');
		echo $form->input('punts_longest');
		echo $form->input('punts_inside_20');
		echo $form->input('punts_inside_20_percentage');
		echo $form->input('punts_average');
		echo $form->input('punts_blocked');
		echo $form->input('touchbacks_total');
		echo $form->input('touchbacks_total_percentage');
		echo $form->input('touchbacks_kickoffs');
		echo $form->input('touchbacks_kickoffs_percentage');
		echo $form->input('touchbacks_punts');
		echo $form->input('touchbacks_punts_percentage');
		echo $form->input('touchbacks_interceptions');
		echo $form->input('touchbacks_interceptions_percentage');
		echo $form->input('fair_catches');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('AmericanFootballSpecialTeamsStat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('AmericanFootballSpecialTeamsStat.id'))); ?></li>
		<li><?php echo $html->link(__('List AmericanFootballSpecialTeamsStats', true), array('action'=>'index'));?></li>
	</ul>
</div>
