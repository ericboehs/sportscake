<div class="soccerActionPlays index">
<h2><?php __('SoccerActionPlays');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('soccer_event_state_id');?></th>
	<th><?php echo $paginator->sort('play_type');?></th>
	<th><?php echo $paginator->sort('score_attempt_type');?></th>
	<th><?php echo $paginator->sort('play_result');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($soccerActionPlays as $soccerActionPlay):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $soccerActionPlay['SoccerActionPlay']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionPlay['SoccerEventState']['id'], array('controller'=> 'soccer_event_states', 'action'=>'view', $soccerActionPlay['SoccerEventState']['id'])); ?>
		</td>
		<td>
			<?php echo $soccerActionPlay['SoccerActionPlay']['play_type']; ?>
		</td>
		<td>
			<?php echo $soccerActionPlay['SoccerActionPlay']['score_attempt_type']; ?>
		</td>
		<td>
			<?php echo $soccerActionPlay['SoccerActionPlay']['play_result']; ?>
		</td>
		<td>
			<?php echo $soccerActionPlay['SoccerActionPlay']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $soccerActionPlay['SoccerActionPlay']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $soccerActionPlay['SoccerActionPlay']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $soccerActionPlay['SoccerActionPlay']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionPlay['SoccerActionPlay']['id'])); ?>
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
		<li><?php echo $html->link(__('New SoccerActionPlay', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Soccer Event States', true), array('controller'=> 'soccer_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Event State', true), array('controller'=> 'soccer_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Soccer Action Participants', true), array('controller'=> 'soccer_action_participants', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Action Participant', true), array('controller'=> 'soccer_action_participants', 'action'=>'add')); ?> </li>
	</ul>
</div>
