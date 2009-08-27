<div class="soccerEventStates index">
<h2><?php __('SoccerEventStates');?></h2>
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
	<th><?php echo $paginator->sort('period_minute_elapsed');?></th>
	<th><?php echo $paginator->sort('context');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($soccerEventStates as $soccerEventState):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $soccerEventState['SoccerEventState']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($soccerEventState['Event']['id'], array('controller'=> 'events', 'action'=>'view', $soccerEventState['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $soccerEventState['SoccerEventState']['current_state']; ?>
		</td>
		<td>
			<?php echo $soccerEventState['SoccerEventState']['sequence_number']; ?>
		</td>
		<td>
			<?php echo $soccerEventState['SoccerEventState']['period_value']; ?>
		</td>
		<td>
			<?php echo $soccerEventState['SoccerEventState']['period_time_elapsed']; ?>
		</td>
		<td>
			<?php echo $soccerEventState['SoccerEventState']['period_time_remaining']; ?>
		</td>
		<td>
			<?php echo $soccerEventState['SoccerEventState']['minutes_elapsed']; ?>
		</td>
		<td>
			<?php echo $soccerEventState['SoccerEventState']['period_minute_elapsed']; ?>
		</td>
		<td>
			<?php echo $soccerEventState['SoccerEventState']['context']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $soccerEventState['SoccerEventState']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $soccerEventState['SoccerEventState']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $soccerEventState['SoccerEventState']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerEventState['SoccerEventState']['id'])); ?>
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
		<li><?php echo $html->link(__('New SoccerEventState', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Fouls', true), array('controller'=> 'soccer_action_fouls', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Foul', true), array('controller'=> 'soccer_action_fouls', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Penalties', true), array('controller'=> 'soccer_action_penalties', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Penalty', true), array('controller'=> 'soccer_action_penalties', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Plays', true), array('controller'=> 'soccer_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Play', true), array('controller'=> 'soccer_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Substitutions', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Substitution', true), array('controller'=> 'soccer_action_substitutions', 'action'=>'add')); ?> </li>
	</ul>
</div>
