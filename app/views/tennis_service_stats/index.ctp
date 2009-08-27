<div class="tennisServiceStats index">
<h2><?php __('TennisServiceStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('services_played');?></th>
	<th><?php echo $paginator->sort('matches_played');?></th>
	<th><?php echo $paginator->sort('aces');?></th>
	<th><?php echo $paginator->sort('first_services_good');?></th>
	<th><?php echo $paginator->sort('first_services_good_pct');?></th>
	<th><?php echo $paginator->sort('first_service_points_won');?></th>
	<th><?php echo $paginator->sort('first_service_points_won_pct');?></th>
	<th><?php echo $paginator->sort('second_service_points_won');?></th>
	<th><?php echo $paginator->sort('second_service_points_won_pct');?></th>
	<th><?php echo $paginator->sort('service_games_played');?></th>
	<th><?php echo $paginator->sort('service_games_won');?></th>
	<th><?php echo $paginator->sort('service_games_won_pct');?></th>
	<th><?php echo $paginator->sort('break_points_played');?></th>
	<th><?php echo $paginator->sort('break_points_saved');?></th>
	<th><?php echo $paginator->sort('break_points_saved_pct');?></th>
	<th><?php echo $paginator->sort('service_points_won');?></th>
	<th><?php echo $paginator->sort('service_points_won_pct');?></th>
	<th><?php echo $paginator->sort('double_faults');?></th>
	<th><?php echo $paginator->sort('first_service_top_speed');?></th>
	<th><?php echo $paginator->sort('second_services_good');?></th>
	<th><?php echo $paginator->sort('second_services_good_pct');?></th>
	<th><?php echo $paginator->sort('second_service_top_speed');?></th>
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
foreach ($tennisServiceStats as $tennisServiceStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['id']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['services_played']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['matches_played']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['aces']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['first_services_good']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['first_services_good_pct']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['first_service_points_won']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['first_service_points_won_pct']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['second_service_points_won']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['second_service_points_won_pct']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['service_games_played']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['service_games_won']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['service_games_won_pct']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['break_points_played']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['break_points_saved']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['break_points_saved_pct']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['service_points_won']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['service_points_won_pct']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['double_faults']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['first_service_top_speed']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['second_services_good']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['second_services_good_pct']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['second_service_top_speed']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['net_points_won']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['net_points_played']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['points_won']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['winners']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['unforced_errors']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['winners_forehand']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['winners_backhand']; ?>
		</td>
		<td>
			<?php echo $tennisServiceStat['TennisServiceStat']['winners_volley']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $tennisServiceStat['TennisServiceStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $tennisServiceStat['TennisServiceStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $tennisServiceStat['TennisServiceStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisServiceStat['TennisServiceStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New TennisServiceStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
