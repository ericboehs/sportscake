<div class="americanFootballEventStates index">
<h2><?php __('AmericanFootballEventStates');?></h2>
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
	<th><?php echo $paginator->sort('clock_state');?></th>
	<th><?php echo $paginator->sort('down');?></th>
	<th><?php echo $paginator->sort('team_in_possession_id');?></th>
	<th><?php echo $paginator->sort('distance_for_1st_down');?></th>
	<th><?php echo $paginator->sort('field_side');?></th>
	<th><?php echo $paginator->sort('field_line');?></th>
	<th><?php echo $paginator->sort('context');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($americanFootballEventStates as $americanFootballEventState):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($americanFootballEventState['Event']['id'], array('controller'=> 'events', 'action'=>'view', $americanFootballEventState['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['current_state']; ?>
		</td>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['sequence_number']; ?>
		</td>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['period_value']; ?>
		</td>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['period_time_elapsed']; ?>
		</td>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['period_time_remaining']; ?>
		</td>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['clock_state']; ?>
		</td>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['down']; ?>
		</td>
		<td>
			<?php echo $html->link($americanFootballEventState['Team']['id'], array('controller'=> 'teams', 'action'=>'view', $americanFootballEventState['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['distance_for_1st_down']; ?>
		</td>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['field_side']; ?>
		</td>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['field_line']; ?>
		</td>
		<td>
			<?php echo $americanFootballEventState['AmericanFootballEventState']['context']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $americanFootballEventState['AmericanFootballEventState']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $americanFootballEventState['AmericanFootballEventState']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $americanFootballEventState['AmericanFootballEventState']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $americanFootballEventState['AmericanFootballEventState']['id'])); ?>
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
		<li><?php echo $html->link(__('New AmericanFootballEventState', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List American Football Action Plays', true), array('controller'=> 'american_football_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New American Football Action Play', true), array('controller'=> 'american_football_action_plays', 'action'=>'add')); ?> </li>
	</ul>
</div>
