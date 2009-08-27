<div class="motorRacingEventStates index">
<h2><?php __('MotorRacingEventStates');?></h2>
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
	<th><?php echo $paginator->sort('lap');?></th>
	<th><?php echo $paginator->sort('laps_remaining');?></th>
	<th><?php echo $paginator->sort('time_elapsed');?></th>
	<th><?php echo $paginator->sort('flag_state');?></th>
	<th><?php echo $paginator->sort('context');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($motorRacingEventStates as $motorRacingEventState):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $motorRacingEventState['MotorRacingEventState']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($motorRacingEventState['Event']['id'], array('controller'=> 'events', 'action'=>'view', $motorRacingEventState['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $motorRacingEventState['MotorRacingEventState']['current_state']; ?>
		</td>
		<td>
			<?php echo $motorRacingEventState['MotorRacingEventState']['sequence_number']; ?>
		</td>
		<td>
			<?php echo $motorRacingEventState['MotorRacingEventState']['lap']; ?>
		</td>
		<td>
			<?php echo $motorRacingEventState['MotorRacingEventState']['laps_remaining']; ?>
		</td>
		<td>
			<?php echo $motorRacingEventState['MotorRacingEventState']['time_elapsed']; ?>
		</td>
		<td>
			<?php echo $motorRacingEventState['MotorRacingEventState']['flag_state']; ?>
		</td>
		<td>
			<?php echo $motorRacingEventState['MotorRacingEventState']['context']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $motorRacingEventState['MotorRacingEventState']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $motorRacingEventState['MotorRacingEventState']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $motorRacingEventState['MotorRacingEventState']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $motorRacingEventState['MotorRacingEventState']['id'])); ?>
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
		<li><?php echo $html->link(__('New MotorRacingEventState', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
	</ul>
</div>
