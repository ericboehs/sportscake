<div class="eventActionPenalties index">
<h2><?php __('EventActionPenalties');?></h2>
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
	<th><?php echo $paginator->sort('penalty_type');?></th>
	<th><?php echo $paginator->sort('penalty_level');?></th>
	<th><?php echo $paginator->sort('caution_level');?></th>
	<th><?php echo $paginator->sort('recipient_type');?></th>
	<th><?php echo $paginator->sort('recipient_id');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($eventActionPenalties as $eventActionPenalty):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $eventActionPenalty['EventActionPenalty']['id']; ?>
		</td>
		<td>
			<?php echo $eventActionPenalty['EventActionPenalty']['event_state_id']; ?>
		</td>
		<td>
			<?php echo $eventActionPenalty['EventActionPenalty']['penalty_type']; ?>
		</td>
		<td>
			<?php echo $eventActionPenalty['EventActionPenalty']['penalty_level']; ?>
		</td>
		<td>
			<?php echo $eventActionPenalty['EventActionPenalty']['caution_level']; ?>
		</td>
		<td>
			<?php echo $eventActionPenalty['EventActionPenalty']['recipient_type']; ?>
		</td>
		<td>
			<?php echo $eventActionPenalty['EventActionPenalty']['recipient_id']; ?>
		</td>
		<td>
			<?php echo $eventActionPenalty['EventActionPenalty']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $eventActionPenalty['EventActionPenalty']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $eventActionPenalty['EventActionPenalty']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $eventActionPenalty['EventActionPenalty']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionPenalty['EventActionPenalty']['id'])); ?>
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
		<li><?php echo $html->link(__('New EventActionPenalty', true), array('action'=>'add')); ?></li>
	</ul>
</div>
