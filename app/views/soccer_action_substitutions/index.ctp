<div class="soccerActionSubstitutions index">
<h2><?php __('SoccerActionSubstitutions');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('soccer_event_state_id');?></th>
	<th><?php echo $paginator->sort('person_type');?></th>
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
foreach ($soccerActionSubstitutions as $soccerActionSubstitution):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $soccerActionSubstitution['SoccerActionSubstitution']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionSubstitution['SoccerEventState']['id'], array('controller'=> 'soccer_event_states', 'action'=>'view', $soccerActionSubstitution['SoccerEventState']['id'])); ?>
		</td>
		<td>
			<?php echo $soccerActionSubstitution['SoccerActionSubstitution']['person_type']; ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionSubstitution['PersonOriginal']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionSubstitution['PersonOriginal']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionSubstitution['PersonOriginalPosition']['id'], array('controller'=> 'positions', 'action'=>'view', $soccerActionSubstitution['PersonOriginalPosition']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionSubstitution['PersonReplacing']['id'], array('controller'=> 'people', 'action'=>'view', $soccerActionSubstitution['PersonReplacing']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($soccerActionSubstitution['PersonReplacingPosition']['id'], array('controller'=> 'positions', 'action'=>'view', $soccerActionSubstitution['PersonReplacingPosition']['id'])); ?>
		</td>
		<td>
			<?php echo $soccerActionSubstitution['SoccerActionSubstitution']['substitution_reason']; ?>
		</td>
		<td>
			<?php echo $soccerActionSubstitution['SoccerActionSubstitution']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $soccerActionSubstitution['SoccerActionSubstitution']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $soccerActionSubstitution['SoccerActionSubstitution']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $soccerActionSubstitution['SoccerActionSubstitution']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soccerActionSubstitution['SoccerActionSubstitution']['id'])); ?>
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
		<li><?php echo $html->link(__('New SoccerActionSubstitution', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Soccer Event States', true), array('controller'=> 'soccer_event_states', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Soccer Event State', true), array('controller'=> 'soccer_event_states', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List People', true), array('controller'=> 'people', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Original', true), array('controller'=> 'people', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Person Original Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
	</ul>
</div>
