<div class="eventStates index">
<h2><?php __('EventStates');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('event_id');?></th>
	<th><?php echo $paginator->sort('current_state');?></th>
	<th><?php echo $paginator->sort('sequence_number');?></th>
	<th><?php echo $paginator->sort('period_value');?></th>
	<th><?php echo $paginator->sort('period_time_elapsed');?></th>
	<th><?php echo $paginator->sort('period_time_remaining');?></th>
	<th><?php echo $paginator->sort('minutes_elapsed');?></th>
	<th><?php echo $paginator->sort('period_minutes_elapsed');?></th>
	<th><?php echo $paginator->sort('context');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($eventStates as $eventState):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $eventState['EventState']['id']; ?>
		</td>
		<td>
			<?php echo $eventState['EventState']['event_id']; ?>
		</td>
		<td>
			<?php echo $eventState['EventState']['current_state']; ?>
		</td>
		<td>
			<?php echo $eventState['EventState']['sequence_number']; ?>
		</td>
		<td>
			<?php echo $eventState['EventState']['period_value']; ?>
		</td>
		<td>
			<?php echo $eventState['EventState']['period_time_elapsed']; ?>
		</td>
		<td>
			<?php echo $eventState['EventState']['period_time_remaining']; ?>
		</td>
		<td>
			<?php echo $eventState['EventState']['minutes_elapsed']; ?>
		</td>
		<td>
			<?php echo $eventState['EventState']['period_minutes_elapsed']; ?>
		</td>
		<td>
			<?php echo $eventState['EventState']['context']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $eventState['EventState']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $eventState['EventState']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $eventState['EventState']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventState['EventState']['id'])); ?>
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
		<li><?php echo $html->link(__('New EventState', true), array('action'=>'add')); ?></li>
	</ul>
</div>
