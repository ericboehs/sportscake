<div class="participantsEvents index">
<h2><?php __('ParticipantsEvents');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('participant_type');?></th>
	<th><?php echo $paginator->sort('participant_id');?></th>
	<th><?php echo $paginator->sort('event_id');?></th>
	<th><?php echo $paginator->sort('alignment');?></th>
	<th><?php echo $paginator->sort('score');?></th>
	<th><?php echo $paginator->sort('event_outcome');?></th>
	<th><?php echo $paginator->sort('rank');?></th>
	<th><?php echo $paginator->sort('result_effect');?></th>
	<th><?php echo $paginator->sort('score_attempts');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($participantsEvents as $participantsEvent):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $participantsEvent['ParticipantsEvent']['id']; ?>
		</td>
		<td>
			<?php echo $participantsEvent['ParticipantsEvent']['participant_type']; ?>
		</td>
		<td>
			<?php echo $participantsEvent['ParticipantsEvent']['participant_id']; ?>
		</td>
		<td>
			<?php echo $html->link($participantsEvent['Event']['id'], array('controller'=> 'events', 'action'=>'view', $participantsEvent['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $participantsEvent['ParticipantsEvent']['alignment']; ?>
		</td>
		<td>
			<?php echo $participantsEvent['ParticipantsEvent']['score']; ?>
		</td>
		<td>
			<?php echo $participantsEvent['ParticipantsEvent']['event_outcome']; ?>
		</td>
		<td>
			<?php echo $participantsEvent['ParticipantsEvent']['rank']; ?>
		</td>
		<td>
			<?php echo $participantsEvent['ParticipantsEvent']['result_effect']; ?>
		</td>
		<td>
			<?php echo $participantsEvent['ParticipantsEvent']['score_attempts']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $participantsEvent['ParticipantsEvent']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $participantsEvent['ParticipantsEvent']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $participantsEvent['ParticipantsEvent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $participantsEvent['ParticipantsEvent']['id'])); ?>
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
		<li><?php echo $html->link(__('New ParticipantsEvent', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Periods', true), array('controller'=> 'periods', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Period', true), array('controller'=> 'periods', 'action'=>'add')); ?> </li>
	</ul>
</div>
