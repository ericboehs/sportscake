<div class="iceHockeyOffensiveStats index">
<h2><?php __('IceHockeyOffensiveStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('goals_game_winning');?></th>
	<th><?php echo $paginator->sort('goals_game_tying');?></th>
	<th><?php echo $paginator->sort('goals_power_play');?></th>
	<th><?php echo $paginator->sort('goals_short_handed');?></th>
	<th><?php echo $paginator->sort('goals_even_strength');?></th>
	<th><?php echo $paginator->sort('goals_empty_net');?></th>
	<th><?php echo $paginator->sort('goals_overtime');?></th>
	<th><?php echo $paginator->sort('goals_shootout');?></th>
	<th><?php echo $paginator->sort('goals_penalty_shot');?></th>
	<th><?php echo $paginator->sort('assists');?></th>
	<th><?php echo $paginator->sort('points');?></th>
	<th><?php echo $paginator->sort('power_play_amount');?></th>
	<th><?php echo $paginator->sort('power_play_percentage');?></th>
	<th><?php echo $paginator->sort('shots_penalty_shot_taken');?></th>
	<th><?php echo $paginator->sort('shots_penalty_shot_missed');?></th>
	<th><?php echo $paginator->sort('shots_penalty_shot_percentage');?></th>
	<th><?php echo $paginator->sort('giveaways');?></th>
	<th><?php echo $paginator->sort('minutes_power_play');?></th>
	<th><?php echo $paginator->sort('faceoff_wins');?></th>
	<th><?php echo $paginator->sort('faceoff_losses');?></th>
	<th><?php echo $paginator->sort('faceoff_win_percentage');?></th>
	<th><?php echo $paginator->sort('scoring_chances');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($iceHockeyOffensiveStats as $iceHockeyOffensiveStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['id']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_game_winning']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_game_tying']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_power_play']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_short_handed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_even_strength']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_empty_net']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_overtime']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_shootout']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['goals_penalty_shot']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['assists']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['points']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['power_play_amount']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['power_play_percentage']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['shots_penalty_shot_taken']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['shots_penalty_shot_missed']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['shots_penalty_shot_percentage']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['giveaways']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['minutes_power_play']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['faceoff_wins']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['faceoff_losses']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['faceoff_win_percentage']; ?>
		</td>
		<td>
			<?php echo $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['scoring_chances']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyOffensiveStat['IceHockeyOffensiveStat']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New IceHockeyOffensiveStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
