<div class="soccerFoulStats index">
<h2><?php __('SoccerFoulStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('fouls_suffered');?></th>
	<th><?php echo $paginator->sort('fouls_commited');?></th>
	<th><?php echo $paginator->sort('cautions_total');?></th>
	<th><?php echo $paginator->sort('cautions_pending');?></th>
	<th><?php echo $paginator->sort('caution_points_total');?></th>
	<th><?php echo $paginator->sort('caution_points_pending');?></th>
	<th><?php echo $paginator->sort('ejections_total');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($soccerFoulStats as $soccerFoulStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $soccerFoulStat['SoccerFoulStat']['id']; ?>
		</td>
		<td>
			<?php echo $soccerFoulStat['SoccerFoulStat']['fouls_suffered']; ?>
		</td>
		<td>
			<?php echo $soccerFoulStat['SoccerFoulStat']['fouls_commited']; ?>
		</td>
		<td>
			<?php echo $soccerFoulStat['SoccerFoulStat']['cautions_total']; ?>
		</td>
		<td>
			<?php echo $soccerFoulStat['SoccerFoulStat']['cautions_pending']; ?>
		</td>
		<td>
			<?php echo $soccerFoulStat['SoccerFoulStat']['caution_points_total']; ?>
		</td>
		<td>
			<?php echo $soccerFoulStat['SoccerFoulStat']['caution_points_pending']; ?>
		</td>
		<td>
			<?php echo $soccerFoulStat['SoccerFoulStat']['ejections_total']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $soccerFoulStat['SoccerFoulStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $soccerFoulStat['SoccerFoulStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $soccerFoulStat['SoccerFoulStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerFoulStat['SoccerFoulStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New SoccerFoulStat', true), array('action'=>'add')); ?></li>
	</ul>
</div>
