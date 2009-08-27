<div class="soccerDefensiveStats index">
<h2><?php __('SoccerDefensiveStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('shots_penalty_shot_allowed');?></th>
	<th><?php echo $paginator->sort('goals_penalty_shot_allowed');?></th>
	<th><?php echo $paginator->sort('goals_against_average');?></th>
	<th><?php echo $paginator->sort('goals_against_total');?></th>
	<th><?php echo $paginator->sort('saves');?></th>
	<th><?php echo $paginator->sort('save_percentage');?></th>
	<th><?php echo $paginator->sort('catches_punches');?></th>
	<th><?php echo $paginator->sort('shots_on_goal_total');?></th>
	<th><?php echo $paginator->sort('shots_shootout_total');?></th>
	<th><?php echo $paginator->sort('shots_shootout_allowed');?></th>
	<th><?php echo $paginator->sort('shots_blocked');?></th>
	<th><?php echo $paginator->sort('shutouts');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($soccerDefensiveStats as $soccerDefensiveStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['id']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shots_penalty_shot_allowed']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['goals_penalty_shot_allowed']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['goals_against_average']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['goals_against_total']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['saves']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['save_percentage']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['catches_punches']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shots_on_goal_total']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shots_shootout_total']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shots_shootout_allowed']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shots_blocked']; ?>
		</td>
		<td>
			<?php echo $soccerDefensiveStat['SoccerDefensiveStat']['shutouts']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $soccerDefensiveStat['SoccerDefensiveStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $soccerDefensiveStat['SoccerDefensiveStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $soccerDefensiveStat['SoccerDefensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerDefensiveStat['SoccerDefensiveStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New SoccerDefensiveStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
