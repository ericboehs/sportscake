<div class="baseballEventStates index">
<h2><?php __('BaseballEventStates');?></h2>
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
	<th><?php echo $paginator->sort('at_bat_number');?></th>
	<th><?php echo $paginator->sort('inning_value');?></th>
	<th><?php echo $paginator->sort('inning_half');?></th>
	<th><?php echo $paginator->sort('outs');?></th>
	<th><?php echo $paginator->sort('balls');?></th>
	<th><?php echo $paginator->sort('strikes');?></th>
	<th><?php echo $paginator->sort('runner_on_first_id');?></th>
	<th><?php echo $paginator->sort('runner_on_second_id');?></th>
	<th><?php echo $paginator->sort('runner_on_third_id');?></th>
	<th><?php echo $paginator->sort('runner_on_first');?></th>
	<th><?php echo $paginator->sort('runner_on_second');?></th>
	<th><?php echo $paginator->sort('runner_on_third');?></th>
	<th><?php echo $paginator->sort('runs_this_inning_half');?></th>
	<th><?php echo $paginator->sort('pitcher_id');?></th>
	<th><?php echo $paginator->sort('batter_id');?></th>
	<th><?php echo $paginator->sort('batter_side');?></th>
	<th><?php echo $paginator->sort('context');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($baseballEventStates as $baseballEventState):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballEventState['Event']['id'], array('controller'=> 'events', 'action'=>'view', $baseballEventState['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['current_state']; ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['sequence_number']; ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['at_bat_number']; ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['inning_value']; ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['inning_half']; ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['outs']; ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['balls']; ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['strikes']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballEventState['RunnerOnFirst']['id'], array('controller'=> 'people', 'action'=>'view', $baseballEventState['RunnerOnFirst']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($baseballEventState['RunnerOnSecond']['id'], array('controller'=> 'people', 'action'=>'view', $baseballEventState['RunnerOnSecond']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($baseballEventState['RunnerOnThird']['id'], array('controller'=> 'people', 'action'=>'view', $baseballEventState['RunnerOnThird']['id'])); ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['runner_on_first']; ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['runner_on_second']; ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['runner_on_third']; ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['runs_this_inning_half']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballEventState['Pitcher']['id'], array('controller'=> 'people', 'action'=>'view', $baseballEventState['Pitcher']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($baseballEventState['Batter']['id'], array('controller'=> 'people', 'action'=>'view', $baseballEventState['Batter']['id'])); ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['batter_side']; ?>
		</td>
		<td>
			<?php echo $baseballEventState['BaseballEventState']['context']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $baseballEventState['BaseballEventState']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $baseballEventState['BaseballEventState']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $baseballEventState['BaseballEventState']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballEventState['BaseballEventState']['id'])); ?>
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
		<li><?php echo $html->link(__('New BaseballEventState', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Runner On First', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Plays', true), array('controller'=> 'baseball_action_plays', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Play', true), array('controller'=> 'baseball_action_plays', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Substitutions', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Substitution', true), array('controller'=> 'baseball_action_substitutions', 'action'=>'add')); ?> </li>
	</ul>
</div>
