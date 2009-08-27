<div class="events index">
<h2><?php __('Events');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('event_key');?></th>
	<th><?php echo $paginator->sort('publisher_id');?></th>
	<th><?php echo $paginator->sort('start_date_time');?></th>
	<th><?php echo $paginator->sort('site_id');?></th>
	<th><?php echo $paginator->sort('site_alignment');?></th>
	<th><?php echo $paginator->sort('event_status');?></th>
	<th><?php echo $paginator->sort('duration');?></th>
	<th><?php echo $paginator->sort('attendance');?></th>
	<th><?php echo $paginator->sort('last_update');?></th>
	<th><?php echo $paginator->sort('event_number');?></th>
	<th><?php echo $paginator->sort('round_number');?></th>
	<th><?php echo $paginator->sort('time_certainty');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($events as $event):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $event['Event']['id']; ?>
		</td>
		<td>
			<?php echo $event['Event']['event_key']; ?>
		</td>
		<td>
			<?php echo $event['Event']['publisher_id']; ?>
		</td>
		<td>
			<?php echo $event['Event']['start_date_time']; ?>
		</td>
		<td>
			<?php echo $event['Event']['site_id']; ?>
		</td>
		<td>
			<?php echo $event['Event']['site_alignment']; ?>
		</td>
		<td>
			<?php echo $event['Event']['event_status']; ?>
		</td>
		<td>
			<?php echo $event['Event']['duration']; ?>
		</td>
		<td>
			<?php echo $event['Event']['attendance']; ?>
		</td>
		<td>
			<?php echo $event['Event']['last_update']; ?>
		</td>
		<td>
			<?php echo $event['Event']['event_number']; ?>
		</td>
		<td>
			<?php echo $event['Event']['round_number']; ?>
		</td>
		<td>
			<?php echo $event['Event']['time_certainty']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $event['Event']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $event['Event']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $event['Event']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $event['Event']['id'])); ?>
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
		<li><?php echo $html->link(__('New Event', true), array('action'=>'add')); ?></li>
	</ul>
</div>
