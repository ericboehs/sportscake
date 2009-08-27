<div class="eventActionPlays index">
<h2><?php __('EventActionPlays');?></h2>
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
	<th><?php echo $paginator->sort('play_type');?></th>
	<th><?php echo $paginator->sort('score_attempt_type');?></th>
	<th><?php echo $paginator->sort('play_result');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($eventActionPlays as $eventActionPlay):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $eventActionPlay['EventActionPlay']['id']; ?>
		</td>
		<td>
			<?php echo $eventActionPlay['EventActionPlay']['event_state_id']; ?>
		</td>
		<td>
			<?php echo $eventActionPlay['EventActionPlay']['play_type']; ?>
		</td>
		<td>
			<?php echo $eventActionPlay['EventActionPlay']['score_attempt_type']; ?>
		</td>
		<td>
			<?php echo $eventActionPlay['EventActionPlay']['play_result']; ?>
		</td>
		<td>
			<?php echo $eventActionPlay['EventActionPlay']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $eventActionPlay['EventActionPlay']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $eventActionPlay['EventActionPlay']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $eventActionPlay['EventActionPlay']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionPlay['EventActionPlay']['id'])); ?>
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
		<li><?php echo $html->link(__('New EventActionPlay', true), array('action'=>'add')); ?></li>
	</ul>
</div>
