<div class="tennisEventStates index">
<h2><?php __('TennisEventStates');?></h2>
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
	<th><?php echo $paginator->sort('tennis_set');?></th>
	<th><?php echo $paginator->sort('game');?></th>
	<th><?php echo $paginator->sort('server_person_id');?></th>
	<th><?php echo $paginator->sort('server_score');?></th>
	<th><?php echo $paginator->sort('receiver_person_id');?></th>
	<th><?php echo $paginator->sort('receiver_score');?></th>
	<th><?php echo $paginator->sort('service_number');?></th>
	<th><?php echo $paginator->sort('context');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($tennisEventStates as $tennisEventState):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tennisEventState['TennisEventState']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($tennisEventState['Event']['id'], array('controller'=> 'events', 'action'=>'view', $tennisEventState['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $tennisEventState['TennisEventState']['current_state']; ?>
		</td>
		<td>
			<?php echo $tennisEventState['TennisEventState']['sequence_number']; ?>
		</td>
		<td>
			<?php echo $tennisEventState['TennisEventState']['tennis_set']; ?>
		</td>
		<td>
			<?php echo $tennisEventState['TennisEventState']['game']; ?>
		</td>
		<td>
			<?php echo $tennisEventState['TennisEventState']['server_person_id']; ?>
		</td>
		<td>
			<?php echo $tennisEventState['TennisEventState']['server_score']; ?>
		</td>
		<td>
			<?php echo $tennisEventState['TennisEventState']['receiver_person_id']; ?>
		</td>
		<td>
			<?php echo $tennisEventState['TennisEventState']['receiver_score']; ?>
		</td>
		<td>
			<?php echo $tennisEventState['TennisEventState']['service_number']; ?>
		</td>
		<td>
			<?php echo $tennisEventState['TennisEventState']['context']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $tennisEventState['TennisEventState']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $tennisEventState['TennisEventState']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $tennisEventState['TennisEventState']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tennisEventState['TennisEventState']['id'])); ?>
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
		<li><?php echo $html->link(__('New TennisEventState', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
	</ul>
</div>
