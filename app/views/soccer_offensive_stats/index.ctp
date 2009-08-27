<div class="soccerOffensiveStats index">
<h2><?php __('SoccerOffensiveStats');?></h2>
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
	<th><?php echo $paginator->sort('goals_overtime');?></th>
	<th><?php echo $paginator->sort('goals_shootout');?></th>
	<th><?php echo $paginator->sort('goals_total');?></th>
	<th><?php echo $paginator->sort('assists_game_winning');?></th>
	<th><?php echo $paginator->sort('assists_game_tying');?></th>
	<th><?php echo $paginator->sort('assists_overtime');?></th>
	<th><?php echo $paginator->sort('assists_total');?></th>
	<th><?php echo $paginator->sort('points');?></th>
	<th><?php echo $paginator->sort('shots_total');?></th>
	<th><?php echo $paginator->sort('shots_on_goal_total');?></th>
	<th><?php echo $paginator->sort('shots_hit_frame');?></th>
	<th><?php echo $paginator->sort('shots_penalty_shot_taken');?></th>
	<th><?php echo $paginator->sort('shots_penalty_shot_scored');?></th>
	<th><?php echo $paginator->sort('shots_penalty_shot_missed');?></th>
	<th><?php echo $paginator->sort('shots_penalty_shot_percentage');?></th>
	<th><?php echo $paginator->sort('shots_shootout_taken');?></th>
	<th><?php echo $paginator->sort('shots_shootout_scored');?></th>
	<th><?php echo $paginator->sort('shots_shootout_missed');?></th>
	<th><?php echo $paginator->sort('shots_shootout_percentage');?></th>
	<th><?php echo $paginator->sort('giveaways');?></th>
	<th><?php echo $paginator->sort('offsides');?></th>
	<th><?php echo $paginator->sort('corner_kicks');?></th>
	<th><?php echo $paginator->sort('hat_tricks');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($soccerOffensiveStats as $soccerOffensiveStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['id']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['goals_game_winning']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['goals_game_tying']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['goals_overtime']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['goals_shootout']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['goals_total']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['assists_game_winning']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['assists_game_tying']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['assists_overtime']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['assists_total']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['points']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_total']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_on_goal_total']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_hit_frame']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_penalty_shot_taken']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_penalty_shot_scored']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_penalty_shot_missed']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_penalty_shot_percentage']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_shootout_taken']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_shootout_scored']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_shootout_missed']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['shots_shootout_percentage']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['giveaways']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['offsides']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['corner_kicks']; ?>
		</td>
		<td>
			<?php echo $soccerOffensiveStat['SoccerOffensiveStat']['hat_tricks']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $soccerOffensiveStat['SoccerOffensiveStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $soccerOffensiveStat['SoccerOffensiveStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $soccerOffensiveStat['SoccerOffensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerOffensiveStat['SoccerOffensiveStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New SoccerOffensiveStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
