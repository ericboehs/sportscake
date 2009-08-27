<div class="basketballOffensiveStats index">
<h2><?php __('BasketballOffensiveStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('field_goals_made');?></th>
	<th><?php echo $paginator->sort('field_goals_attempted');?></th>
	<th><?php echo $paginator->sort('field_goals_percentage');?></th>
	<th><?php echo $paginator->sort('field_goals_per_game');?></th>
	<th><?php echo $paginator->sort('field_goals_attempted_per_game');?></th>
	<th><?php echo $paginator->sort('field_goals_percentage_adjusted');?></th>
	<th><?php echo $paginator->sort('three_pointers_made');?></th>
	<th><?php echo $paginator->sort('three_pointers_attempted');?></th>
	<th><?php echo $paginator->sort('three_pointers_percentage');?></th>
	<th><?php echo $paginator->sort('three_pointers_per_game');?></th>
	<th><?php echo $paginator->sort('three_pointers_attempted_per_game');?></th>
	<th><?php echo $paginator->sort('free_throws_made');?></th>
	<th><?php echo $paginator->sort('free_throws_attempted');?></th>
	<th><?php echo $paginator->sort('free_throws_percentage');?></th>
	<th><?php echo $paginator->sort('free_throws_per_game');?></th>
	<th><?php echo $paginator->sort('free_throws_attempted_per_game');?></th>
	<th><?php echo $paginator->sort('points_scored_total');?></th>
	<th><?php echo $paginator->sort('points_scored_per_game');?></th>
	<th><?php echo $paginator->sort('assists_total');?></th>
	<th><?php echo $paginator->sort('assists_per_game');?></th>
	<th><?php echo $paginator->sort('turnovers_total');?></th>
	<th><?php echo $paginator->sort('turnovers_per_game');?></th>
	<th><?php echo $paginator->sort('points_scored_off_turnovers');?></th>
	<th><?php echo $paginator->sort('points_scored_in_paint');?></th>
	<th><?php echo $paginator->sort('points_scored_on_second_chance');?></th>
	<th><?php echo $paginator->sort('points_scored_on_fast_break');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($basketballOffensiveStats as $basketballOffensiveStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['id']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_made']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_attempted']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_percentage']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_attempted_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['field_goals_percentage_adjusted']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['three_pointers_made']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['three_pointers_attempted']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['three_pointers_percentage']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['three_pointers_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['three_pointers_attempted_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['free_throws_made']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['free_throws_attempted']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['free_throws_percentage']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['free_throws_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['free_throws_attempted_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_total']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['assists_total']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['assists_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['turnovers_total']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['turnovers_per_game']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_off_turnovers']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_in_paint']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_on_second_chance']; ?>
		</td>
		<td>
			<?php echo $basketballOffensiveStat['BasketballOffensiveStat']['points_scored_on_fast_break']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $basketballOffensiveStat['BasketballOffensiveStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $basketballOffensiveStat['BasketballOffensiveStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $basketballOffensiveStat['BasketballOffensiveStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $basketballOffensiveStat['BasketballOffensiveStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New BasketballOffensiveStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
