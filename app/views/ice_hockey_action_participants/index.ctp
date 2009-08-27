<div class="iceHockeyActionParticipants index">
<h2><?php __('IceHockeyActionParticipants');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('ice_hockey_action_play_id');?></th>
	<th><?php echo $paginator->sort('person_id');?></th>
	<th><?php echo $paginator->sort('participant_role');?></th>
	<th><?php echo $paginator->sort('point_credit');?></th>
	<th><?php echo $paginator->sort('goals_to_date');?></th>
	<th><?php echo $paginator->sort('assists_to_date');?></th>
	<th><?php echo $paginator->sort('points_to_date');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($iceHockeyActionParticipants as $iceHockeyActionParticipant):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['id']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['ice_hockey_action_play_id']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['person_id']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['participant_role']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['point_credit']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['goals_to_date']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['assists_to_date']; ?>
		</td>
		<td>
			<?php echo $iceHockeyActionParticipant['IceHockeyActionParticipant']['points_to_date']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $iceHockeyActionParticipant['IceHockeyActionParticipant']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $iceHockeyActionParticipant['IceHockeyActionParticipant']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $iceHockeyActionParticipant['IceHockeyActionParticipant']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iceHockeyActionParticipant['IceHockeyActionParticipant']['id'])); ?>
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
		<li><?php echo $html->link(__('New IceHockeyActionParticipant', true), array('action'=>'add')); ?></li>
	</ul>
</div>
