<div class="iceHockeyActionPlays index">
<h2><?php __('IceHockeyActionPlays');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('ice_hockey_event_state_id');?></th>
	<th><?php echo $paginator->sort('play_key');?></th>
	<th><?php echo $paginator->sort('play_type');?></th>
	<th><?php echo $paginator->sort('score_attempt_type');?></th>
	<th><?php echo $paginator->sort('play_result');?></th>
	<th><?php echo $paginator->sort('penalty_type');?></th>
	<th><?php echo $paginator->sort('penalty_length');?></th>
	<th><?php echo $paginator->sort('penalty_code');?></th>
	<th><?php echo $paginator->sort('recipient_type');?></th>
	<th><?php echo $paginator->sort('team_id');?></th>
	<th><?php echo $paginator->sort('strength');?></th>
	<th><?php echo $paginator->sort('location_x');?></th>
	<th><?php echo $paginator->sort('location_y');?></th>
	<th><?php echo $paginator->sort('location_zone');?></th>
	<th><?php echo $paginator->sort('shootout_shot_order');?></th>
	<th><?php echo $paginator->sort('goal_order');?></th>
	<th><?php echo $paginator->sort('shot_type');?></th>
	<th><?php echo $paginator->sort('shot_distance');?></th>
	<th><?php echo $paginator->sort('goal_zone');?></th>
	<th><?php echo $paginator->sort('empty_net');?></th>
	<th><?php echo $paginator->sort('goal_awarded');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($iceHockeyActionPlays as $iceHockeyActionPlay):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['id']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['ice_hockey_event_state_id']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['play_key']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['play_type']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['score_attempt_type']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['play_result']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['penalty_type']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['penalty_length']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['penalty_code']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['recipient_type']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['team_id']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['strength']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['location_x']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['location_y']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['location_zone']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['shootout_shot_order']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['goal_order']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['shot_type']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['shot_distance']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['goal_zone']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['empty_net']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['goal_awarded']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionPlay['IceHockeyActionPlay']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $iceHockeyActionPlay['IceHockeyActionPlay']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $iceHockeyActionPlay['IceHockeyActionPlay']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $iceHockeyActionPlay['IceHockeyActionPlay']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyActionPlay['IceHockeyActionPlay']['id'])); ?>
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
		<li><?php echo $html->link(__('New IceHockeyActionPlay', true), array('action'=>'add')); ?></li>
	</ul>
</div>
