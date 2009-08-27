<div class="baseballActionSubstitutions index">
<h2><?php __('BaseballActionSubstitutions');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('baseball_event_state_id');?></th>
	<th><?php echo $paginator->sort('sequence_number');?></th>
	<th><?php echo $paginator->sort('person_type');?></th>
	<th><?php echo $paginator->sort('person_original_id');?></th>
	<th><?php echo $paginator->sort('person_original_position_id');?></th>
	<th><?php echo $paginator->sort('person_original_lineup_slot');?></th>
	<th><?php echo $paginator->sort('person_replacing_id');?></th>
	<th><?php echo $paginator->sort('person_replacing_position_id');?></th>
	<th><?php echo $paginator->sort('person_replacing_lineup_slot');?></th>
	<th><?php echo $paginator->sort('substitution_reason');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($baseballActionSubstitutions as $baseballActionSubstitution):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballActionSubstitution['BaseballEventState']['id'], array('controller'=> 'baseball_event_states', 'action'=>'view', $baseballActionSubstitution['BaseballEventState']['id'])); ?>
		</td>
		<td>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['sequence_number']; ?>
		</td>
		<td>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['person_type']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballActionSubstitution['PersonOriginal']['id'], array('controller'=> 'people', 'action'=>'view', $baseballActionSubstitution['PersonOriginal']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($baseballActionSubstitution['PersonOriginalPosition']['id'], array('controller'=> 'positions', 'action'=>'view', $baseballActionSubstitution['PersonOriginalPosition']['id'])); ?>
		</td>
		<td>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['person_original_lineup_slot']; ?>
		</td>
		<td>
			<?php echo $html->link($baseballActionSubstitution['PersonReplacing']['id'], array('controller'=> 'people', 'action'=>'view', $baseballActionSubstitution['PersonReplacing']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($baseballActionSubstitution['PersonReplacingPosition']['id'], array('controller'=> 'positions', 'action'=>'view', $baseballActionSubstitution['PersonReplacingPosition']['id'])); ?>
		</td>
		<td>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['person_replacing_lineup_slot']; ?>
		</td>
		<td>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['substitution_reason']; ?>
		</td>
		<td>
			<?php echo $baseballActionSubstitution['BaseballActionSubstitution']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $baseballActionSubstitution['BaseballActionSubstitution']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $baseballActionSubstitution['BaseballActionSubstitution']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $baseballActionSubstitution['BaseballActionSubstitution']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseballActionSubstitution['BaseballActionSubstitution']['id'])); ?>
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
		<li><?php echo $html->link(__('New BaseballActionSubstitution', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Baseball Event States', true), array('controller'=> 'baseball_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Baseball Event State', true), array('controller'=> 'baseball_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Original', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Original Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
	</ul>
</div>
