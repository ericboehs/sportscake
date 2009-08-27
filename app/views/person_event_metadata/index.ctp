<div class="personEventMetadata index">
<h2><?php __('PersonEventMetadata');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('person_id');?></th>
	<th><?php echo $paginator->sort('event_id');?></th>
	<th><?php echo $paginator->sort('status');?></th>
	<th><?php echo $paginator->sort('health');?></th>
	<th><?php echo $paginator->sort('weight');?></th>
	<th><?php echo $paginator->sort('role_id');?></th>
	<th><?php echo $paginator->sort('position_id');?></th>
	<th><?php echo $paginator->sort('team_id');?></th>
	<th><?php echo $paginator->sort('lineup_slot');?></th>
	<th><?php echo $paginator->sort('lineup_slot_sequence');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($personEventMetadata as $personEventMetadatum):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $personEventMetadatum['PersonEventMetadatum']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($personEventMetadatum['Person']['id'], array('controller'=> 'people', 'action'=>'view', $personEventMetadatum['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($personEventMetadatum['Event']['id'], array('controller'=> 'events', 'action'=>'view', $personEventMetadatum['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $personEventMetadatum['PersonEventMetadatum']['status']; ?>
		</td>
		<td>
			<?php echo $personEventMetadatum['PersonEventMetadatum']['health']; ?>
		</td>
		<td>
			<?php echo $personEventMetadatum['PersonEventMetadatum']['weight']; ?>
		</td>
		<td>
			<?php echo $html->link($personEventMetadatum['Role']['id'], array('controller'=> 'roles', 'action'=>'view', $personEventMetadatum['Role']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($personEventMetadatum['Position']['id'], array('controller'=> 'positions', 'action'=>'view', $personEventMetadatum['Position']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($personEventMetadatum['Team']['id'], array('controller'=> 'teams', 'action'=>'view', $personEventMetadatum['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $personEventMetadatum['PersonEventMetadatum']['lineup_slot']; ?>
		</td>
		<td>
			<?php echo $personEventMetadatum['PersonEventMetadatum']['lineup_slot_sequence']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $personEventMetadatum['PersonEventMetadatum']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $personEventMetadatum['PersonEventMetadatum']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $personEventMetadatum['PersonEventMetadatum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $personEventMetadatum['PersonEventMetadatum']['id'])); ?>
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
		<li><?php echo $html->link(__('New PersonEventMetadatum', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Events', true), array('controller'=> 'events', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Event', true), array('controller'=> 'events', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Roles', true), array('controller'=> 'roles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Role', true), array('controller'=> 'roles', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Teams', true), array('controller'=> 'teams', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Team', true), array('controller'=> 'teams', 'action'=>'add')); ?> </li>
	</ul>
</div>
