<div class="tennisReturnStats index">
<h2><?php __('TennisReturnStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('returns_played');?></th>
	<th><?php echo $paginator->sort('matches_played');?></th>
	<th><?php echo $paginator->sort('first_service_return_points_won');?></th>
	<th><?php echo $paginator->sort('first_service_return_points_won_pct');?></th>
	<th><?php echo $paginator->sort('second_service_return_points_won');?></th>
	<th><?php echo $paginator->sort('second_service_return_points_won_pct');?></th>
	<th><?php echo $paginator->sort('return_games_played');?></th>
	<th><?php echo $paginator->sort('return_games_won');?></th>
	<th><?php echo $paginator->sort('return_games_won_pct');?></th>
	<th><?php echo $paginator->sort('break_points_played');?></th>
	<th><?php echo $paginator->sort('break_points_converted');?></th>
	<th><?php echo $paginator->sort('break_points_converted_pct');?></th>
	<th><?php echo $paginator->sort('net_points_won');?></th>
	<th><?php echo $paginator->sort('net_points_played');?></th>
	<th><?php echo $paginator->sort('points_won');?></th>
	<th><?php echo $paginator->sort('winners');?></th>
	<th><?php echo $paginator->sort('unforced_errors');?></th>
	<th><?php echo $paginator->sort('winners_forehand');?></th>
	<th><?php echo $paginator->sort('winners_backhand');?></th>
	<th><?php echo $paginator->sort('winners_volley');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($tennisReturnStats as $tennisReturnStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['id']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['returns_played']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['matches_played']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['first_service_return_points_won']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['first_service_return_points_won_pct']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['second_service_return_points_won']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['second_service_return_points_won_pct']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['return_games_played']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['return_games_won']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['return_games_won_pct']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['break_points_played']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['break_points_converted']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['break_points_converted_pct']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['net_points_won']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['net_points_played']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['points_won']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['winners']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['unforced_errors']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['winners_forehand']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['winners_backhand']; ?>
		</td>
		<td>
			<?php echo $tennisReturnStat['TennisReturnStat']['winners_volley']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $tennisReturnStat['TennisReturnStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $tennisReturnStat['TennisReturnStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $tennisReturnStat['TennisReturnStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisReturnStat['TennisReturnStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New TennisReturnStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
