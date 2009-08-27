<div class="tennisSetStats index">
<h2><?php __('TennisSetStats');?></h2>
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
foreach ($tennisSetStats as $tennisSetStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tennisSetStat['TennisSetStat']['id']; ?>
		</td>
		<td>
			<?php echo $tennisSetStat['TennisSetStat']['net_points_won']; ?>
		</td>
		<td>
			<?php echo $tennisSetStat['TennisSetStat']['net_points_played']; ?>
		</td>
		<td>
			<?php echo $tennisSetStat['TennisSetStat']['points_won']; ?>
		</td>
		<td>
			<?php echo $tennisSetStat['TennisSetStat']['winners']; ?>
		</td>
		<td>
			<?php echo $tennisSetStat['TennisSetStat']['unforced_errors']; ?>
		</td>
		<td>
			<?php echo $tennisSetStat['TennisSetStat']['winners_forehand']; ?>
		</td>
		<td>
			<?php echo $tennisSetStat['TennisSetStat']['winners_backhand']; ?>
		</td>
		<td>
			<?php echo $tennisSetStat['TennisSetStat']['winners_volley']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $tennisSetStat['TennisSetStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $tennisSetStat['TennisSetStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $tennisSetStat['TennisSetStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisSetStat['TennisSetStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New TennisSetStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
