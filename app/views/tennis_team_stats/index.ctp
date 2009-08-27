<div class="tennisTeamStats index">
<h2><?php __('TennisTeamStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
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
foreach ($tennisTeamStats as $tennisTeamStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tennisTeamStat['TennisTeamStat']['id']; ?>
		</td>
		<td>
			<?php echo $tennisTeamStat['TennisTeamStat']['net_points_won']; ?>
		</td>
		<td>
			<?php echo $tennisTeamStat['TennisTeamStat']['net_points_played']; ?>
		</td>
		<td>
			<?php echo $tennisTeamStat['TennisTeamStat']['points_won']; ?>
		</td>
		<td>
			<?php echo $tennisTeamStat['TennisTeamStat']['winners']; ?>
		</td>
		<td>
			<?php echo $tennisTeamStat['TennisTeamStat']['unforced_errors']; ?>
		</td>
		<td>
			<?php echo $tennisTeamStat['TennisTeamStat']['winners_forehand']; ?>
		</td>
		<td>
			<?php echo $tennisTeamStat['TennisTeamStat']['winners_backhand']; ?>
		</td>
		<td>
			<?php echo $tennisTeamStat['TennisTeamStat']['winners_volley']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $tennisTeamStat['TennisTeamStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $tennisTeamStat['TennisTeamStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $tennisTeamStat['TennisTeamStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisTeamStat['TennisTeamStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New TennisTeamStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
