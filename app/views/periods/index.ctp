<div class="periods index">
<h2><?php __('Periods');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('participant_event_id');?></th>
	<th><?php echo $paginator->sort('period_value');?></th>
	<th><?php echo $paginator->sort('score');?></th>
	<th><?php echo $paginator->sort('label');?></th>
	<th><?php echo $paginator->sort('score_attempts');?></th>
	<th><?php echo $paginator->sort('rank');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($periods as $period):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $period['Period']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($period['ParticipantsEvent']['id'], array('controller'=> 'participants_events', 'action'=>'view', $period['ParticipantsEvent']['id'])); ?>
		</td>
		<td>
			<?php echo $period['Period']['period_value']; ?>
		</td>
		<td>
			<?php echo $period['Period']['score']; ?>
		</td>
		<td>
			<?php echo $period['Period']['label']; ?>
		</td>
		<td>
			<?php echo $period['Period']['score_attempts']; ?>
		</td>
		<td>
			<?php echo $period['Period']['rank']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $period['Period']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $period['Period']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $period['Period']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $period['Period']['id'])); ?>
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
		<li><?php echo $html->link(__('New Period', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Participants Events', true), array('controller'=> 'participants_events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Participants Event', true), array('controller'=> 'participants_events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Periods', true), array('controller'=> 'periods', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Sub Period', true), array('controller'=> 'periods', 'action'=>'add')); ?> </li>
	</ul>
</div>
