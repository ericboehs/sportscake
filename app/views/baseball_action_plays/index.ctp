<div class="baseballActionPlays index">
<h2><?php __('BaseballActionPlays');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('baseball_event_state_id');?></th>
	<th><?php echo $paginator->sort('play_type');?></th>
	<th><?php echo $paginator->sort('out_type');?></th>
	<th><?php echo $paginator->sort('notation');?></th>
	<th><?php echo $paginator->sort('notation_yaml');?></th>
	<th><?php echo $paginator->sort('baseball_defensive_group_id');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th><?php echo $paginator->sort('runner_on_first_advance');?></th>
	<th><?php echo $paginator->sort('runner_on_second_advance');?></th>
	<th><?php echo $paginator->sort('runner_on_third_advance');?></th>
	<th><?php echo $paginator->sort('outs_recorded');?></th>
	<th><?php echo $paginator->sort('rbi');?></th>
	<th><?php echo $paginator->sort('runs_scored');?></th>
	<th><?php echo $paginator->sort('earned_runs_scored');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($baseballActionPlays as $baseballActionPlay):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballActionPlay['BaseballEventState']['id'], array('controller'=> 'baseball_event_states', 'action'=>'view', $baseballActionPlay['BaseballEventState']['id'])); ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['play_type']; ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['out_type']; ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['notation']; ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['notation_yaml']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballActionPlay['BaseballDefensiveGroup']['id'], array('controller'=> 'baseball_defensive_groups', 'action'=>'view', $baseballActionPlay['BaseballDefensiveGroup']['id'])); ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['comment']; ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['runner_on_first_advance']; ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['runner_on_second_advance']; ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['runner_on_third_advance']; ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['outs_recorded']; ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['rbi']; ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['runs_scored']; ?>
		</td>
		<td>
			<?php echo $baseballActionPlay['BaseballActionPlay']['earned_runs_scored']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $baseballActionPlay['BaseballActionPlay']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $baseballActionPlay['BaseballActionPlay']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $baseballActionPlay['BaseballActionPlay']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionPlay['BaseballActionPlay']['id'])); ?>
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
		<li><?php echo $html->link(__('New BaseballActionPlay', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Baseball Event States', true), array('controller'=> 'baseball_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Event State', true), array('controller'=> 'baseball_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Defensive Groups', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Defensive Group', true), array('controller'=> 'baseball_defensive_groups', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Baseball Action Pitches', true), array('controller'=> 'baseball_action_pitches', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Action Pitch', true), array('controller'=> 'baseball_action_pitches', 'action'=>'add')); ?> </li>
	</ul>
</div>
