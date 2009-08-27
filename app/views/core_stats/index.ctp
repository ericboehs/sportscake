<div class="coreStats index">
<h2><?php __('CoreStats');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('score');?></th>
	<th><?php echo $paginator->sort('score_opposing');?></th>
	<th><?php echo $paginator->sort('score_attempts');?></th>
	<th><?php echo $paginator->sort('score_attempts_opposing');?></th>
	<th><?php echo $paginator->sort('score_percentage');?></th>
	<th><?php echo $paginator->sort('score_percentage_opposing');?></th>
	<th><?php echo $paginator->sort('time_played_event');?></th>
	<th><?php echo $paginator->sort('time_played_total');?></th>
	<th><?php echo $paginator->sort('time_played_event_average');?></th>
	<th><?php echo $paginator->sort('events_played');?></th>
	<th><?php echo $paginator->sort('events_started');?></th>
	<th><?php echo $paginator->sort('position_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($coreStats as $coreStat):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $coreStat['CoreStat']['id']; ?>
		</td>
		<td>
			<?php echo $coreStat['CoreStat']['score']; ?>
		</td>
		<td>
			<?php echo $coreStat['CoreStat']['score_opposing']; ?>
		</td>
		<td>
			<?php echo $coreStat['CoreStat']['score_attempts']; ?>
		</td>
		<td>
			<?php echo $coreStat['CoreStat']['score_attempts_opposing']; ?>
		</td>
		<td>
			<?php echo $coreStat['CoreStat']['score_percentage']; ?>
		</td>
		<td>
			<?php echo $coreStat['CoreStat']['score_percentage_opposing']; ?>
		</td>
		<td>
			<?php echo $coreStat['CoreStat']['time_played_event']; ?>
		</td>
		<td>
			<?php echo $coreStat['CoreStat']['time_played_total']; ?>
		</td>
		<td>
			<?php echo $coreStat['CoreStat']['time_played_event_average']; ?>
		</td>
		<td>
			<?php echo $coreStat['CoreStat']['events_played']; ?>
		</td>
		<td>
			<?php echo $coreStat['CoreStat']['events_started']; ?>
		</td>
		<td>
			<?php echo $html->link($coreStat['Position']['id'], array('controller'=> 'positions', 'action'=>'view', $coreStat['Position']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $coreStat['CoreStat']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $coreStat['CoreStat']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $coreStat['CoreStat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $coreStat['CoreStat']['id'])); ?>
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
		<li><?php echo $html->link(__('New CoreStat', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
	</ul>
</div>
