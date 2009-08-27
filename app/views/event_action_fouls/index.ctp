<div class="eventActionFouls index">
<h2><?php __('EventActionFouls');?></h2>
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
	<th><?php echo $paginator->sort('foul_name');?></th>
	<th><?php echo $paginator->sort('foul_result');?></th>
	<th><?php echo $paginator->sort('foul_type');?></th>
	<th><?php echo $paginator->sort('fouler_id');?></th>
	<th><?php echo $paginator->sort('recipient_type');?></th>
	<th><?php echo $paginator->sort('recipient_id');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($eventActionFouls as $eventActionFoul):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $eventActionFoul['EventActionFoul']['id']; ?>
		</td>
		<td>
			<?php echo $eventActionFoul['EventActionFoul']['event_state_id']; ?>
		</td>
		<td>
			<?php echo $eventActionFoul['EventActionFoul']['foul_name']; ?>
		</td>
		<td>
			<?php echo $eventActionFoul['EventActionFoul']['foul_result']; ?>
		</td>
		<td>
			<?php echo $eventActionFoul['EventActionFoul']['foul_type']; ?>
		</td>
		<td>
			<?php echo $eventActionFoul['EventActionFoul']['fouler_id']; ?>
		</td>
		<td>
			<?php echo $eventActionFoul['EventActionFoul']['recipient_type']; ?>
		</td>
		<td>
			<?php echo $eventActionFoul['EventActionFoul']['recipient_id']; ?>
		</td>
		<td>
			<?php echo $eventActionFoul['EventActionFoul']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $eventActionFoul['EventActionFoul']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $eventActionFoul['EventActionFoul']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $eventActionFoul['EventActionFoul']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionFoul['EventActionFoul']['id'])); ?>
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
		<li><?php echo $html->link(__('New EventActionFoul', true), array('action'=>'add')); ?></li>
	</ul>
</div>
