<div class="eventActionSubstitutions index">
<h2><?php __('EventActionSubstitutions');?></h2>
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
	<th><?php echo $paginator->sort('person_original_id');?></th>
	<th><?php echo $paginator->sort('person_original_position_id');?></th>
	<th><?php echo $paginator->sort('person_replacing_id');?></th>
	<th><?php echo $paginator->sort('person_replacing_position_id');?></th>
	<th><?php echo $paginator->sort('substitution_reason');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($eventActionSubstitutions as $eventActionSubstitution):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['id']; ?>
		</td>
		<td>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['event_state_id']; ?>
		</td>
		<td>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['person_original_id']; ?>
		</td>
		<td>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['person_original_position_id']; ?>
		</td>
		<td>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['person_replacing_id']; ?>
		</td>
		<td>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['person_replacing_position_id']; ?>
		</td>
		<td>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['substitution_reason']; ?>
		</td>
		<td>
			<?php echo $eventActionSubstitution['EventActionSubstitution']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $eventActionSubstitution['EventActionSubstitution']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $eventActionSubstitution['EventActionSubstitution']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $eventActionSubstitution['EventActionSubstitution']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventActionSubstitution['EventActionSubstitution']['id'])); ?>
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
		<li><?php echo $html->link(__('New EventActionSubstitution', true), array('action'=>'add')); ?></li>
	</ul>
</div>
