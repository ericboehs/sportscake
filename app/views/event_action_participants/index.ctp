<div class="eventActionParticipants index">
<h2><?php __('EventActionParticipants');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('event_state_id');?></th>
	<th><?php echo $paginator->sort('event_action_play_id');?></th>
	<th><?php echo $paginator->sort('person_id');?></th>
	<th><?php echo $paginator->sort('participant_role');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($eventActionParticipants as $eventActionParticipant):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $eventActionParticipant['EventActionParticipant']['id']; ?>
		</td>
		<td>
			<?php echo $eventActionParticipant['EventActionParticipant']['event_state_id']; ?>
		</td>
		<td>
			<?php echo $eventActionParticipant['EventActionParticipant']['event_action_play_id']; ?>
		</td>
		<td>
			<?php echo $eventActionParticipant['EventActionParticipant']['person_id']; ?>
		</td>
		<td>
			<?php echo $eventActionParticipant['EventActionParticipant']['participant_role']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $eventActionParticipant['EventActionParticipant']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $eventActionParticipant['EventActionParticipant']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $eventActionParticipant['EventActionParticipant']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionParticipant['EventActionParticipant']['id'])); ?>
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
		<li><?php echo $html->link(__('New EventActionParticipant', true), array('action'=>'add')); ?></li>
	</ul>
</div>
